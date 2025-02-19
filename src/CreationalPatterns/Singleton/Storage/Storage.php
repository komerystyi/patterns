<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\Singleton\Storage;

interface Storage
{
    public function store(string $message, int $priority = 1): void;
    public function getAll(): array;
    public function clear(): void;
}