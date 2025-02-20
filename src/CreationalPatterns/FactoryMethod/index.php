<?php

use Glum\Patterns\CreationalPatterns\FactoryMethod\Enums\PaymentMethod;
use Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories\PaymentFactoryProvider;

require dirname(__DIR__, 3).'/vendor/autoload.php';

$factory = PaymentFactoryProvider::getFactory(PaymentMethod::BLUESNAP);
$paymentMethod = $factory->createPaymentMethod();
$paymentMethod->pay(100);

$factory = PaymentFactoryProvider::getFactory(PaymentMethod::PAYPAL);
$paymentMethod = $factory->createPaymentMethod();
$paymentMethod->pay(100);