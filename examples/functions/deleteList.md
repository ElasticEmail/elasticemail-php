# Delete List

This guide will walk you through steps of removing contacts list from your account using the PHP library.

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

Create an instance of ListsApi that will be used to delete a list.

```php
$apiInstance = new ElasticEmail\Api\ListsApi(
    new GuzzleHttp\Client(),
    $config
);
```

The only thing needed is a list name.

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsByEmailDelete

Create an instance of ListsApi that will be used to delete a list.

```php
$name = "My List";
$response = $apiInstance->listsByNameDelete($name);
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

$name = "My List";

try {
    $response = $apiInstance->listsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```
