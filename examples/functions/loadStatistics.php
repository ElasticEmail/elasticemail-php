<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/statisticsGet
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

$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$from = "2022-03-14T12:00:00+01:00"; // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = "2022-03-17T12:00:00+01:00"; // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.

try {
    $response = $apiInstance->statisticsGet($from, $to);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
