<?php

$conn = mysqli_connect('localhost','root','bdc6ee9e6fdf','shop_db') or die('connection failed');

// Stripe API Configuration - Use environment variables for security
// Set STRIPE_SECRET_KEY in your server environment
$stripe_secret_key = getenv('STRIPE_SECRET_KEY') ?: '';

?>
