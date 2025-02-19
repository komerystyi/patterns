<?php

declare(strict_types=1);

namespace Glum\Patterns\CreationalPatterns\Singleton;

use Glum\Patterns\CreationalPatterns\Singleton\Storage\Storage;

final class NotificationQueue
{
    private static ?NotificationQueue $instance = null;

    private function __construct(
        private readonly Storage $storage
    ) {
    }

    public static function getInstance(Storage $storage): NotificationQueue
    {
        return is_null(self::$instance) ? self::$instance = new self($storage) : self::$instance;
    }

    public function addNotification(string $message, int $priority = 1): void
    {
        $this->storage->store($message, $priority);
    }

    public function getNotifications(): array
    {
        return $this->storage->getAll();
    }

    public function clear(): void
    {
        $this->storage->clear();
    }
}