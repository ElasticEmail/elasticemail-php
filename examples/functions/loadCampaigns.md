# Load Campaigns

This guide will walk you through the process of loading details about an existing campaign in your account using the PHP library. Example details you can get are like: name, status, recipients, subject etc.

*Required Access Level: ViewCampaigns*

## What's a campaign?
When using Elastic Email, when you send an email to any group of contacts we call that a "campaign".

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

Create an instance of CampaignsApi that will be used to delete a campaign.

```php
$apiInstance = new ElasticEmail\Api\CampaignsApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/campaignsGet

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
