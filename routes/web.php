<?php


use App\Http\Controllers\CommandeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Err404;
use App\Http\Controllers\Err500;
use App\Http\Controllers\GiftCardController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\userController;
use App\Http\Controllers\VariationController;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/login",[userController::class,"showLogin"])->name("showlogin");
Route::post("/login",[userController::class,"login"])->name("login");
Route::redirect("/","/login");
Route::get("/logout",[userController::class,'logout'])->name("logout");
Route::get('/register', [userController::class,"register"])->name('register');
Route::post('/store',[userController::class,"store"])->name("store");
Route::get('/forgot-password',[userController::class,'showforgetPassword'])->name("forgot-password");
Route::post("/recoverPassword",[userController::class,"recoverPassword"])->name('recoverPassword');
Route::get('/reset-password/{id}', [userController::class,"showresetPassword"])->name('reset-password');
Route::post("/resetPassword/{id}",[userController::class,'resetPassword'])->name('resetPassword');



Route::middleware('auth')->group(function () {


Route::get("/order/{store}",[orderController::class,"index"])->name("order.index");
Route::get("/dashboard",[dashboardController::class,"index"])->name("dashboard");
Route::get("/user/profile",[userController::class,"showprofile"])->name("userprofile");
Route::post("/user/save-profile",[userController::class,"profilesave"])->name("profilesave");


Route::name("stores.")->prefix("stores")->group(function(){
    Route::controller(StoreController::class)->group(function(){
        Route::get("/","index")->name("index");
        Route::post("/","store")->name("store");
        Route::delete("/delete/{store}","destroy")->name("destroy");
        Route::get("/create",'create')->name("create");
        Route::put("/update/{store}","update")->name("update");
        Route::get("edit/{store}","edit")->name("edit");
        Route::get("/visit/{id}","visit")->name("visit");
        Route::post("/visit/valid/{id}","valid")->name("validated");
        Route::get("/retargeting/{id}",'reset')->name("reset");
    });
    });



Route::name("rewards.")->prefix("rewards")->group(function(){
Route::controller(RewardController::class)->group(function(){
    Route::get("/{store}","index")->name("index");
    Route::post("/","store")->name("store");
    Route::delete("/delete/{reward}","destroy")->name("destroy");

    Route::get("/analytics/{store}","analytics")->name("analytics");
    Route::get("/customer/{store}","customer")->name("customer");
    Route::delete("/customer/{store}/{profile}","destroyProfile")->name("destroyProfile");
    Route::get("/create/{store}",'create')->name("create");
    Route::put("/update/{reward}","update")->name("update");
    Route::get("edit/{reward}","edit")->name("edit");
});
Route::post("/validation/{store}",[CommandeController::class,"validated"])->name("validated");
Route::get("/validation/{store}/{id?}",[CommandeController::class,"validation"])->name("validation");

});
Route::name("gifts.")->prefix("gifts")->group(function(){
    Route::controller(GiftCardController::class)->group(function(){
        Route::post("/","store")->name("store");
        Route::get("/{store}","index")->name("index");
        Route::get("/analytics/{store}","analytics")->name("analytics");
        Route::delete("/customer/{store}/{profile}","destroyProfile")->name("destroyProfile");
        Route::get("/customer/{store}","customer")->name("customer");
        Route::get("/create/{store}",'create')->name("create");
        Route::put("/update/{giftCard}","update")->name("update");
        Route::delete("/delete/{giftCard}","destroy")->name("destroy");
        Route::get("edit/{giftCard}","edit")->name("edit");
    });

    Route::name("variations.")->prefix('variations')->group(function(){
        Route::controller(VariationController::class)->group(function(){
            Route::get("/{giftCard}","index")->name("index");
            Route::get("/create/{giftCard}",'create')->name("create");
            Route::delete("/delete/{variation}","destroy")->name("destroy");
            Route::put("/update/{variation}",'update')->name("update");
            Route::post("/store","store")->name("store");
        });
    });
   
    });
});
Route::name("gifts.")->prefix("gifts")->group(function(){

Route::controller(PurchasesController::class)->group(function(){
    Route::get('/launch/{giftCard}',"index")->name("launch.index");
    Route::get('/launch/achat/{giftCard}',"show")->name("launch.show");
    Route::post('/launch/achat/store',"store")->name("launch.store");
    Route::get("/launch/achat/resultat/{purchases}","resultat")->name("launch.resultat");
    Route::post("/validation/{store}","validated")->name("validated");
    Route::get("/validation/{store}/{id?}","validation")->name("validation");

});
});
Route::name("clients.")->prefix("clients")->group(function(){
    Route::controller(ProfileController::class)->group(function(){
        Route::post("/register/store/{store}","store")->name("store");
        Route::get("/register/{store}","register")->name("register")->middleware('signed');
        Route::get("/dashboard/{profile}","index")->name("index");
    });
    Route::get("/dashboard/commande/{profile}/{reward}",[CommandeController::class,"commande"])->name("commande");
});

