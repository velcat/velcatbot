<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('339096733:AAG2gGoHexiyCscroF0b8eqvjlOnNnmV76g');

$response = $telegram->setWebhook(['url' => 'https://example.com/<token>/webhook']);

// Or if you are supplying a self-signed-certificate
$response = $telegram->setWebhook([
  'url' => 'https://example.com/<token>/webhook',
  'certificate' => '/path/to/public_key_certificate.pub'
]);