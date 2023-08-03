<?php 
 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemPrice = 25;  
$currency = "USD";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51NawPmHwpeiZzeqVC38Dnjthy0KNRl0XJX8UnktONH5ygxAjxU1OSZHbD4U6UbbTGOAYIm1qUrrU9PuWO230BDH700ClbGFMdu'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51NawPmHwpeiZzeqVHt0kff2e7lODFULmvoxVmtCQaCbeDjfx66gvRl81364Ghe54KdZCAniE6fMeTJWDK37s0FVh00SFRjOH3c'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'stripe-pay'); 
 
?>