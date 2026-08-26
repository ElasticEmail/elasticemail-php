# Load Statistics

This guide will walk you through steps of loading basic delivery statistics from your account using the PHP library. 

*Required Access Level: ViewReports*

## What statistics are returned?
When using Elastic Email you send emails to your contacts from that we create some statistics reports for you eg. number of emails sent, number of delivered messages, number of bounced messages, number of unsubscribed messages etc.

## Let's dig into the code

Put the below code to your file.

Load library using below line:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

Generate and use your API key (remember to check a required access level): 

```php
define('MY_APIKEY', 'YOUR_API_KEY');
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);
```

Get client instance:

```php
$apiInstance = new ElasticEmail\Api\StatisticsApi(
    new GuzzleHttp\Client(),
    $config
);
```

First you need to specify a date range:
- from date
- to date – optional

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/statisticsGet

```php
$from = "2022-03-14T12:00:00+01:00";
$to = "2022-03-17T12:00:00+01:00";
```

Create an instance of StatisticsApi that will be used to get basic send statistics.

```php
$response = $apiInstance->statisticsGet($from, $to);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\StatisticsApi(
    new GuzzleHttp\Client(),
    $config
);

$from = "2022-03-14T12:00:00+01:00";
$to = "2022-03-17T12:00:00+01:00";

try {
    $response = $apiInstance->statisticsGet($from, $to);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}

```
