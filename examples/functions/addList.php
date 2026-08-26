<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/listsPost
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

$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$list_payload = new \ElasticEmail\Model\ListPayload([
    "list_name" => "My New List",
    "allow_unsubscribe" => true,
    "emails" => []
]); // \ElasticEmail\Model\ListPayload

try {
    $response = $apiInstance->listsPost($list_payload);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsPost: ', $e->getMessage(), PHP_EOL;
}
