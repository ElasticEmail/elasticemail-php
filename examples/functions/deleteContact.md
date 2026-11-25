# Delete Contact

This guide will walk you through steps of deleting one contact from your account, by its email address, using the PHP library. To delete several contacts in one call, see [deleteContacts](deleteContacts.md).

*Required Access Level: ModifyContacts*

## What's a contact?
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

Create an instance of ContactsApi that will be used to delete contacts.

```php
$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsByEmailDelete

Specify the email address of the contact to delete:

```php
$email = "johnsmith@domain.com"; // string | Proper email address.
```

And finally, call `contactsByEmailDelete` method from the API to delete the contact:

```php
$apiInstance->contactsByEmailDelete($email);
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

$email = "johnsmith@domain.com"; // string | Proper email address.

try {
    $apiInstance->contactsByEmailDelete($email);
    echo 'Contact deleted', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```
