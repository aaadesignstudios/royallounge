<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_D5SturdPe6H6f0UUTJNXrv5N",
  "publishable_key" => "pk_test_3vR71NY1dwikCjlbxhT30UrO"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>