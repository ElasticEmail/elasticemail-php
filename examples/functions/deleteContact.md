# Delete Contacts

This guide will walk you through steps of deleting contact(s) from your account using the PHP library.

*Required Access Level: ModifyContacts*

## What's a contact?
When using Elastic Email, you send emails to contacts – recipients who receive your emails. Contacts can be grouped by created segments or lists.

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

Create an instance of ContactsApi that will be used to delete contacts.

```php
$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an object with an array of contact to delete.

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsByEmailDelete

Create an instance of CampaignsApi that will be used to create a campaign.

```php
$email = ["mail@contact.com"];
$response = $apiInstance->contactsByEmailDelete($email);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);

$email = ["mail@contact.com"];

try {
    $response = $apiInstance->contactsByEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```
