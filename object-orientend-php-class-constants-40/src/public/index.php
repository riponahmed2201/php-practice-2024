<?php


use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

//$transaction = new Transaction();
//echo $transaction::STATUS_PAID;
//echo Transaction::STATUS_PAID;

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);