<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    require("init.php");

//now we are going to charge him (more info from here: https://stripe.com/docs/tutorials/charges)

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account
\Stripe\Stripe::setApiKey($stripe['secret']);

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
    $charge = \Stripe\Charge::create(array(
            "amount" => 1000, // amount in cents, again
            "currency" => "usd",
            "source" => $token,
            "description" => "this is user payment desc"
    ));
    echo "<h1> payment done</h1>";
} catch(\Stripe\Error\Card $e) {
    // The card has been declined
}
?>

<h3>Token is:


    <pre>
<?php
    var_export($_POST);
echo "<hr>";
    var_dump($_POST);
die;
//    echo $_POST['stripeToken'];
?>
</h3>
</pre>
<hr/>



</body>
</html>