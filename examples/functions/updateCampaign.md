# Update Campaign

This guide will walk you through steps to update an existing campaign on your account.

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

Create a whole campaign object that you want to put in place of a current version:

Name: defines campaign name by which you can identify it later
Recipients: define your audience
Conent: define your message details
Status: define status in which campaign should be created

Send will be triggered immediately or postponed, depending on given options.
Because we define Status as Draft, so in this case it will be postponed and campaign will be added to drafts.

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/campaignsByNamePut

```php
$name = "My Campaign 1";
$campaign = new \ElasticEmail\Model\Campaign([
    "recipients" => new \ElasticEmail\Model\CampaignRecipient([
            "list_names" => ["My Contacts 1"]
    ]),
    "content" => [
        new \ElasticEmail\Model\CampaignTemplate([
            "poolname" => "My Custom Pool",
            "from" => "email@domain.com",
            "reply_to" => "email@domain.com",
            "subject" => "New Subject",
            "template_name" => "Template-name"
        ])
    ],
]);

$response = $apiInstance->campaignsByNamePut($name, $campaign);
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
$campaign = new \ElasticEmail\Model\Campaign([
    "recipients" => new \ElasticEmail\Model\CampaignRecipient([
            "list_names" => ["My Contacts 1"]
    ]),
    "content" => [
        new \ElasticEmail\Model\CampaignTemplate([
            "poolname" => "My Custom Pool",
            "from" => "email@domain.com",
            "reply_to" => "email@domain.com",
            "subject" => "New Subject",
            "template_name" => "Template-name"
        ])
    ],
]);

try {
    $response = $apiInstance->campaignsByNamePut($name, $campaign);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNamePut: ', $e->getMessage(), PHP_EOL;
}
```
