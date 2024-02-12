<?php

require_once './PaymentProfile.php';
require_once './Customer.php';
require_once './Transaction.php';

// Constructor Property Promotion - Nullsafe Operator

$transaction = new Transaction(5, 'Test');

// $transaction->customer = new Customer();

/*
   1. Null Safe Operator ?
    2. function or method a kaj kore
*/

// echo $transaction->customer?->paymentProfile?->id;
echo $transaction->getCustomer()?->getPaymentProfile()?->id;


/*
    1. null coalescing operator Output: Foo
    2. function or method a kaj kore na
*/

// echo $transaction->customer->paymentProfile->id ?? 'Foo';