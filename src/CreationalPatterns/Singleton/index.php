<?php

use Glum\Patterns\CreationalPatterns\Singleton\NotificationQueue;
use Glum\Patterns\CreationalPatterns\Singleton\Storage\FileStorage;

require dirname(__DIR__, 3).'/vendor/autoload.php';

$storage = new FileStorage(__DIR__ . '/storage/queue.json');

$queueInstance = NotificationQueue::getInstance($storage);
$queueInstance->addNotification('Hello, world!', 1);

$queueSecondInstance = NotificationQueue::getInstance($storage);
$queueSecondInstance->addNotification('How are you today?', 2);

$queueThirdInstance = NotificationQueue::getInstance($storage);
$queueThirdInstance->addNotification('Goodbye!', 3);

foreach ($queueInstance->getNotifications() as $notification) {
    echo $notification['message'] . PHP_EOL;
}

$queueInstance->clear();