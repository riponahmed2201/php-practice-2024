<?php

require_once '../Transaction.php';

//Classes & Objects
// $transaction = new Transaction(100, 'Transaction 1');

// $transaction->amount = 15;

// $transaction->addTax(8);
// $transaction->applyDiscount(10);

// $transaction->addTax(8)->applyDiscount(10);

// $class = 'Transaction';

// $amount = (new $class(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10)
//     ->getAmount();

// $amount = (new Transaction(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10)
//     ->getAmount();

$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2 = (new Transaction(200, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());
