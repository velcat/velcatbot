<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('BOT TOKEN');

$updates = $telegram->getWebhookUpdates();

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();