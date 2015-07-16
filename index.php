<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    require("init.php");
?>

<h1>Stripe Payments</h1>


<!-- You Can Find this information from here: https://stripe.com/docs/checkout -->
<!-- login stripe to see the payments you have just done... -->
<form action="charge.php" method="POST">
<!-- the (image,name,label,description,email,currency,amount) is optional -->
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable']; ?>"
        data-image="logo.jpg"
        data-name="Stripe Test Application"
        data-label= "pay me pitch"
        data-description = "buy the cake"
        data-email="<?php echo $email; ?>"
        data-currency="usd"
        data-amount="50"
        >
    </script>
</form>








</body>
</html>