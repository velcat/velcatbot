<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('339096733:AAG2gGoHexiyCscroF0b8eqvjlOnNnmV76g');

$response = $telegram->removeWebhook();