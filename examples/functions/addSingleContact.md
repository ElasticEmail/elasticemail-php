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

Read your API key from the `ELASTICEMAIL_API_KEY` environment variable (remember to check a required access level). Set it with `export ELASTICEMAIL_API_KEY=your-api-key` before you run the script; the script stops with an error if it is not set:

```php
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
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
        "email" => "johnsmith@domain.com",
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

$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);

$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);

$contact_payload = [new \ElasticEmail\Model\ContactPayload(
    [
        "email" => "johnsmith@domain.com",
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
