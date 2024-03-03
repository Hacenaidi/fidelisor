<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase Commande</title>
</head>
<body>
    <div class="container">
        <p>Hi there.</p>
        <p>Thank you {{$purchase->profile->name}} for your purchase </p>
        <p>you have purchased {{$purchase->variation->gift->namecard}}</p>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary" border="1"
            >
                <thead>
                    <tr>
                        <th scope="col">Variation Name</th>
                        <th scope="col">Quantite</th>
                        <th scope="col">Total</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr class=""> 
                        <td>{{$purchase->variation->variation_name}}</td>
                        <td>{{$purchase->quantite}}</td>
                        <td>{{$purchase->total_price}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>
            to receive your order you must go to {{$purchase->profile->store->nomStore}} before  {{$purchase->variation->gift->expiration}} days of your purchase and show this code
        </p>
        <h2>Code : {{$purchase->code}}</h2>
        <p>Belle journée et au grand plaisir de vous revoir </p>
        <p>Votre équipe  {{$purchase->profile->store->nomStore}}</p>
    </div>
</body>
</html>