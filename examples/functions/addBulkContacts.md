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
$contact_payload = [new \ElasticEmail\Model\ContactPayload(
    [
        "email" => "foo.bar@gmail.com",
        "first_name" => "John",
        "last_name" => "Doe",
        "status" => 'Active'
        ]
    )];
$listnames = "My Contacts 1";

response = $apiInstance->contactsPost($contact_payload, $listnames);
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

$contact_payload = [new \ElasticEmail\Model\ContactPayload(
    [
        "email" => "foo.bar@gmail.com",
        "first_name" => "John",
        "last_name" => "Doe",
        "status" => 'Active'
        ]
    )];
$listnames = "My Contacts 1";

try {
    $response = $apiInstance->contactsPost($contact_payload, $listnames);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
```
