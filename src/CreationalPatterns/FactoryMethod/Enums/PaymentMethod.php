<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\FactoryMethod\Enums;

enum PaymentMethod
{
    case PAYPAL;
    case BLUESNAP;
    case DIRECT_BANK;
}