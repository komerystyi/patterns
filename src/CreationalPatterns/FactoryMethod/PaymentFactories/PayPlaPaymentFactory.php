<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories;

use Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories\PaymentFactory;
use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\Payment;
use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\PayPalPayment;

final class PayPlaPaymentFactory implements PaymentFactory
{

    public function createPaymentMethod(): Payment
    {
        return new PayPalPayment();
    }
}