# Add Bulk Contacts

This guide will walk you through the process of adding new contacts to your account using the PHP library. 

*Required Access Level: ModifyContacts*

## What's contact?
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

Get client instance:

```php
$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an instance of ContactsApi that will be used to add contacts.

```php
$list_name = "My Contacts 1";
$encoding_name = "UTF-8";
$file = "my-contacts.csv";

$response = $apiInstance->contactsImportPost($list_name, $encoding_name, $file);
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

$list_name = "My Contacts 1";
$encoding_name = "UTF-8";
$file = "my-contacts.csv";

try {
    $response = $apiInstance->contactsImportPost($list_name, $encoding_name, $file);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsImportPost: ', $e->getMessage(), PHP_EOL;
}
```
