<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsDeletePost
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

$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$emails_payload = new \ElasticEmail\Model\EmailsPayload([
    "emails" => ["johnsmith@domain.com", "johndoe@domain.com"]
]); // Provide either rule or a list of emails, not both.

try {
    $apiInstance->contactsDeletePost($emails_payload);
    echo 'Contacts deleted', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDeletePost: ', $e->getMessage(), PHP_EOL;
}
