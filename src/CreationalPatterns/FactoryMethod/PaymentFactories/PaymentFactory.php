<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories;

use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\Payment;

interface PaymentFactory
{
    public function createPaymentMethod(): Payment;
}