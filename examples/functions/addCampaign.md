# Add Campaign

This guide will walk you through the process of creating your first campaign using the PHP library. 

*Required Access Level: ModifyCampaigns*

## What's a campaign?
When using Elastic Email, when you send an email to any group of contacts we call that a "campaign".

To send a campaign you need a template (which becomes the email body itself) and you need contacts (the recipients who receive the email).

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

Get client instance:

```php
$apiInstance = new ElasticEmail\Api\CampaignsApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an example campaign object:
- Name: defines campaign name by which you can identify it later
- Recipients: define your audience
- Conent: define your message details
- Status: define status in which campaign should be created

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/campaignsPost

```php
$campaign = new \ElasticEmail\Model\Campaign([
    "name" => "My Campaign",
    "recipients" => new \ElasticEmail\Model\CampaignRecipient([
            "list_names" => ["My Contacts 1"]
    ]),
    "content" => [
        new \ElasticEmail\Model\CampaignTemplate([
            "poolname" => "My Custom Pool",
            "from" => "email@domain.com",
            "reply_to" => "email@domain.com",
            "subject" => "Hello",
            "template_name" => "Template-name",
        ])
    ],
]);
```

Create an instance of CampaignsApi that will be used to create a campaign.

```php
$response = $apiInstance->campaignsPost($campaign);
```


## The whole code to copy and paste:

```php
/require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\CampaignsApi(
    new GuzzleHttp\Client(),
    $config
);

$campaign = new \ElasticEmail\Model\Campaign([
    "name" => "My Campaign",
    "recipients" => new \ElasticEmail\Model\CampaignRecipient([
            "list_names" => ["My Contacts 1"]
    ]),
    "content" => [
        new \ElasticEmail\Model\CampaignTemplate([
            "poolname" => "My Custom Pool",
            "from" => "email@domain.com",
            "reply_to" => "email@domain.com",
            "subject" => "Hello",
            "template_name" => "Template-name",
        ])
    ],
]);

try {
    $response = $apiInstance->campaignsPost($campaign);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsPost: ', $e->getMessage(), PHP_EOL;
}

```
