<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsPost
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


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$contact_payload = [new \ElasticEmail\Model\ContactPayload(
    [
        "email" => "work.rafkwa+test@gmail.com",
        "first_name" => "John",
        "last_name" => "Doe",
        "status" => 'Active'
        ]
    )]; // \ElasticEmail\Model\ContactPayload[]
$listnames = "My Contacts 1"; // string[] | Names of lists to which the uploaded contacts should be added to

try {
    $response = $apiInstance->contactsPost($contact_payload, $listnames);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
