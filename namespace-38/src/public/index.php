<?php

require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Stripe/Transaction.php';

// use PaymentGateway\Paddle\Transaction;
// use PaymentGateway\Paddle\CustomerProfile;

use PaymentGateway\Paddle\{Transaction, CustomerProfile}; // same location or path a hole aivabe {} ar moddhe sob gula lekha jai

use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleCustomerProfile, $paddleTransaction, $stripeTransaction);