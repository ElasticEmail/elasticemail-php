# Delete Contacts

This guide will walk you through steps of deleting several contacts from your account in one call using the PHP library. To delete one contact by its email address, see [deleteContact](deleteContact.md).

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

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsDeletePost

Create an `EmailsPayload` object with the emails of the contacts to delete:

```php
$emails_payload = new \ElasticEmail\Model\EmailsPayload([
    "emails" => ["johnsmith@domain.com", "johndoe@domain.com"]
]);
```

And finally, call `contactsDeletePost` method from the API to delete the contacts:

```php
$apiInstance->contactsDeletePost($emails_payload);
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

$emails_payload = new \ElasticEmail\Model\EmailsPayload([
    "emails" => ["johnsmith@domain.com", "johndoe@domain.com"]
]);

try {
    $apiInstance->contactsDeletePost($emails_payload);
    echo 'Contacts deleted', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDeletePost: ', $e->getMessage(), PHP_EOL;
}
```
