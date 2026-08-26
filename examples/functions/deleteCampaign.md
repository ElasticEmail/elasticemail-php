# Delete Campaign

This guide will walk you through steps to delete an existing campaign from your account.

*Required Access Level: ModifyCampaigns*

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

The only thing you need to specify is a campaign name

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/campaignsByNameDelete

```php
$name = "My Campaign 1";
$response = $apiInstance->campaignsByNameDelete($name);
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

$name = "My Campaign 1";

try {
    $response = $apiInstance->campaignsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```
