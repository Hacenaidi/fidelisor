<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reward Commande</title>
</head>
<body>
    <div class="container">
       
        <p>Good morning. </p>
        <p>Congratulations, you have successfully validated your reward!
        </p>
        <p>here are the details of your reward </p>
        <p>Award Name - {{$commande->reward->name}}</p>
        <p>Expresion date - {{$commande->expiration->format("Y-M-d : H:m")}}</p>
        <p>Access your loyalty account here - <a href="{{request()->getSchemeAndHttpHost()}}/clients/dashboard/{{$commande->id_profile }}">http://127.0.0.1:8000/clients/dashboard/1{{$commande->id_profile}}</a></p>
        <p>Just show this code at the counter {{$commande->profile->store->nomStore}}</p>
        <h4>Code : {{$commande->code}}</h4>
        <p>Have a nice day and look forward to seeing you again </p>
        <p>Your team  {{$commande->profile->store->nomStore}}</p>
    </div>
</body>
</html>