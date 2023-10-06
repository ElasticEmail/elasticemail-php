<?php
require_once(__DIR__ . '/vendor/autoload.php');


$API_KEY = 'ECEF3C8F124DDEBC88524EFFF0AD4416E2510BB6B4EE93EB135C651E0BBA32B6BB782EF9114A60F38DBA91D7D2323ED8';

// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $API_KEY);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
//$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_types = ['\ElasticEmail\Model\EventType()']; // \ElasticEmail\Model\EventType[] | Types of Events to return
$from = new \DateTime("2023-09-01T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2023-09-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$order_by = new \ElasticEmail\Model\EventsOrderBy(); // EventsOrderBy
$limit = 10; // int | How many items to load. Maximum for this request is 1000 items
$offset = 0; // int | How many items should be returned ahead.

try {

    //$result = $apiInstance->eventsByTransactionidGet('b817bf7c-7e63-01c2-c07c-afc375a3a014');
    $result = $apiInstance->eventsGet($event_types, $from->format('YYYY-MM-DDThh:mm:ss'), $to->format('YYYY-MM-DDThh:mm:ss'), $order_by::DATE_DESCENDING, $limit, $offset, 'application/json');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
