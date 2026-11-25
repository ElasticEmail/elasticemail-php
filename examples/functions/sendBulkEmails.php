<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/emailsPost
*
* Snippets
* https://github.com/ElasticEmail/elasticemail-php
*/
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$email_message_data = new \ElasticEmail\Model\EmailMessageData([
    "recipients" => [new \ElasticEmail\Model\EmailRecipient([
        "email" => "email@domain.com"
    ])],
    "content" => new \ElasticEmail\Model\EmailContent([
        "body" => [
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
                "content" => "<strong>My test email content</strong>"
            ]),
            new \ElasticEmail\Model\BodyPart([
                "content_type" => "PlainText",
                "content" => "My test email content"
            ])
        ],
        "from" => "mail@contact.com",
        "subject" => "My Subject",
        "reply_to" => "mail@contact.com",
    ]),
    "options" => new \ElasticEmail\Model\Options([
        "channel_name" => "My Channel"
    ])
]); // \ElasticEmail\Model\EmailMessageData | Email data

// One new key per send (a UUID v4); reuse it only to retry this same send with the same message.
$bytes = random_bytes(16);
$bytes[6] = chr(ord($bytes[6]) & 0x0f | 0x40);
$bytes[8] = chr(ord($bytes[8]) & 0x3f | 0x80);
$idempotencyKey = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));

try {
    $response = $apiInstance->emailsPost($email_message_data, $idempotencyKey);
    echo 'TransactionID: ', $response->getTransactionId(), '  Idempotency-Key: ', $idempotencyKey, PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsPost: ', $e->getMessage(), PHP_EOL;
}
