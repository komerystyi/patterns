<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\Payments;

use Glum\Patterns\CreationalPatterns\FactoryMethod\Payments\Payment;

final class DirectBankPayment implements Payment
{

    public function pay(float $amount): void
    {
        echo "Paying $amount using Direct Bank\n";
    }
}