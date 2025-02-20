<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories;

use Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories\PaymentFactory;
use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\BluesnapPayment;
use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\Payment;

final class BluesnapPaymentFactory implements PaymentFactory
{

    public function createPaymentMethod(): Payment
    {
        return new BluesnapPayment();
    }
}