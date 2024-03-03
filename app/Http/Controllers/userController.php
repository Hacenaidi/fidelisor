<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use App\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class   userController extends Controller
{

    
    //page forgot password
    public function  showforgetPassword(){
        if (Auth()->user()){
            return redirect()->intended(route('dashboard'));

        }else{
            return view('livewire.auth.forgot-password');

        }
    }
    public function recoverPassword(Request $request){

        if (Auth()->user()){
           return redirect()->intended(route('dashboard'));

       }else{
       $formfilds = $request->validate([
           'email' => 'required|email|exists:users']);
       $user=User::where('email', $formfilds["email"])->first();    
       $user->notify(new ResetPassword($user->id));
       return redirect()->intended(route('forgot-password'))->with("success"," An email containing the password reset link has been sent.");

   }   

   }
    // page reset password
    public function showresetPassword($id){
        $request = User::find($id);  
        $urlId =($request->id);
        return view("livewire.auth.reset-password",compact("urlId"));
    }

    
    public function resetPassword(Request $request){
        if (Auth()->user()){
            return redirect()->intended(route('dashboard'));

        }else{
            $formfilds = $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|confirmed|min:6',
            ]);
            $existingUser = User::where('email', $formfilds["email"])->first();
            if($existingUser && $existingUser->id == $request->id) {
                $existingUser->update([
                    'password' => Hash::make($formfilds["password"])
                ]);
                return redirect()->intended(route("reset-password",$request->id))->with("success"," Your password has been changed.")   ;
                     }
            else {
                return  redirect()->intended(route("reset-password",$request->id))->with("fail"," Please insert the correct email address. ")   ;
                     }

            }
        }
        // page login et logout

        public function showLogin(Request $request){
            if($request->cookie("id") != null && Auth::check() == false){
                $user = User::find($request->cookie("id"));
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }elseif (Auth()->user()){
                return redirect()->intended(route('dashboard'));
    
            }else{
    
                return view('livewire.auth.login');
    
            }
        }

    public function login(Request $request){
        //recupere les donner
       $login = $request->email;
       $password = $request->password;
       $credentials= ["email"=>$login,"password" => $password];
       //authentification
      
       if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        $cookie = Cookie()->forever("id",Auth::id());
        return redirect()->intended(route('dashboard'))->withCookie($cookie);

            }else{
        return back()->withErrors([
            'email' =>'Email ou password est incorrect.'
        ])->onlyInput("login");
            }

    }
    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        $cookie = Cookie::forget('id');
        
        return to_route("showlogin")->withCookie($cookie);
    }

    // page register 
    public function register(){
        if (Auth()->user()){
            return redirect()->intended(route('dashboard'));
        }else{

        return view("livewire.auth.register");
    }
    }
    

    public function store(request $request){
        $formfilds = $request->validate([
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);
        $password = $request->password;
        $formfilds["password"] = Hash::make($password);
        $formfilds["first_name"] = "Admin";
        $formfilds["last_name"] = "User";
        User::create($formfilds);
        session()->regenerate();
        return redirect()->intended(route('dashboard'));
    }

// page profile 

    public function showprofile(){
    return view("livewire.profile");
}

public function profilesave(Request $request){
    $formfilds = $request->validate([
        'first_name' => 'max:15',
        'last_name' => 'max:20',
        'email' => 'email',
        'address' => 'max:40',
        'number' => 'max:14 ',
        'ZIP' => 'max:5',
        'city' => 'max:20',
        
    ]);
    Auth()->user()->fill($formfilds)->update();
    return redirect()->intended(route("userprofile"))->with("success","Saved!");

}


}
