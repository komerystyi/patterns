<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\Singleton\Storage;

final class FileStorage implements Storage
{
    public function __construct(private string $filePath)
    {
        if (!file_exists(dirname($this->filePath))) {
            mkdir(dirname($this->filePath), 0777, true);
        }
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([]));
        }
    }

    public function store(string $message, int $priority = 1): void
    {
        $queue = json_decode(file_get_contents($this->filePath), true);
        $queue[] = ['message' => $message, 'priority' => $priority];

        usort($queue, fn ($a, $b) => $a['priority'] <=> $b['priority']);

        file_put_contents($this->filePath, json_encode($queue));
    }

    public function getAll(): array
    {
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function clear(): void
    {
        file_put_contents($this->filePath, json_encode([]));
    }
}