<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\PaymentFactories;

use Glum\Patterns\CreationalPatterns\FactoryMethod\Enums\PaymentMethod;
use InvalidArgumentException;

final class PaymentFactoryProvider
{
    public static function getFactory(PaymentMethod $paymentMethod): PaymentFactory
    {
        return match ($paymentMethod) {
            PaymentMethod::BLUESNAP => new BluesnapPaymentFactory(),
            PaymentMethod::DIRECT_BANK => new DirectBankPaymentFactory(),
            PaymentMethod::PAYPAL => new PayPlaPaymentFactory(),
            default => throw new InvalidArgumentException('Invalid payment method')
        };
    }
}