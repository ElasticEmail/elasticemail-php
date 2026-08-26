# Add List

This guide will walk you through the process of adding a new list of contacts to your account using the PHP library. 

*Required Access Level: ModifyContacts*

## What's a list?
When using Elastic Email, you send emails to contacts – recipients who receive your emails. Contacts can be grouped by created segments or lists. Segments add contacts automatically when specfied conditions are met, and contacts on lists are managed manually.

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
$apiInstance = new ElasticEmail\Api\ListsApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an object with details about new list. Only `ListName` is required. 

You can also define if to allow unsubscription from list and pass an emails array of existing contacts on your account to add them to list during list creation. 

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/listsPost

```php
$list_payload = new \ElasticEmail\Model\ListPayload([
    "list_name" => "My New List",
    "allow_unsubscribe" => true,
    "emails" => []
]);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

$apiInstance = new ElasticEmail\Api\ListsApi(
    new GuzzleHttp\Client(),
    $config
);

$list_payload = new \ElasticEmail\Model\ListPayload([
    "list_name" => "My New List",
    "allow_unsubscribe" => true,
    "emails" => []
]);

try {
    $response = $apiInstance->listsPost($list_payload);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsPost: ', $e->getMessage(), PHP_EOL;
}
```
