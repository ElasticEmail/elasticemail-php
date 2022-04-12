# Load Campaigns Statistics

This guide will walk you through steps of loading statistics for each campaign from your account using the PHP library.

*Required Access Level: ViewChannels*

## What statistics are returned?
When using Elastic Email you send email campaigns to your contacts. From that we create statistics reports for you eg. number of emails sent, number of delivered messages,Number of opened messages, number of unsubscribed messages, number of clicked messages etc.

### Let's dig into the code

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

Create an instance of StatisticsApi that will be used to get basic send statistics.

```php
$apiInstance = new ElasticEmail\Api\CampaignsApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/statisticsCampaignsByNameGet

```php
$response = $apiInstance->campaignsGet();
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\CampaignsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $response = $apiInstance->campaignsGet();
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGet: ', $e->getMessage(), PHP_EOL;
}echo 'Exception when calling CampaignsApi->campaignsGet: ', $e->getMessage(), PHP_EOL;
}
```
