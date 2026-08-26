<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/emailsTransactionalPost
*
* Snippets
* https://github.com/ElasticEmail/elasticemail-php
*/
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$email_message_data = new \ElasticEmail\Model\EmailTransactionalMessageData([
    "recipients" => new \ElasticEmail\Model\TransactionalRecipient([
        "to" => ["email@domain.com, email2@domain.com, email3@domain.com"],
        "cc" => ["email4@domain.com, email5@domain.com"],
        "bcc" => ["email6@domain.com"]
    ]),
    "content" => new \ElasticEmail\Model\EmailContent([
        "body" => [new \ElasticEmail\Model\BodyPart([
                "content_type" => "HTML",
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

try {
    $response = $apiInstance->emailsTransactionalPost($email_message_data);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionalPost: ', $e->getMessage(), PHP_EOL;
}
