<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\Payments;

interface Payment
{
    public function pay(float $amount): void;
}