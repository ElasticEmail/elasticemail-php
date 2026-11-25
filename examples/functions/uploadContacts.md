# Upload Contacts

This guide will walk you through the process of adding new contacts to your account, by uploading them from a CSV file, using the PHP library.

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

Create an instance of ContactsApi:

```php
$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsImportPost

Set the path to the CSV file and its encoding. There is a sample file in `files/contacts.csv`. Optionally, name an existing list to add the contacts to; otherwise they are only added to all contacts. The client opens the file and sends it as the multipart `file` field:

```php
$list_name = "My New List";
$encoding_name = "utf-8";
$file = __DIR__ . '/files/contacts.csv';
```

And finally, call `contactsImportPost` method from the API to upload the contacts. The third argument is an optional URL of a CSV to import instead of a file, so pass `null` here:

```php
$apiInstance->contactsImportPost($list_name, $encoding_name, null, $file);
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

$list_name = "My New List";
$encoding_name = "utf-8";
$file = __DIR__ . '/files/contacts.csv';

try {
    $apiInstance->contactsImportPost($list_name, $encoding_name, null, $file);
    echo 'Contacts uploaded', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsImportPost: ', $e->getMessage(), PHP_EOL;
}
```
