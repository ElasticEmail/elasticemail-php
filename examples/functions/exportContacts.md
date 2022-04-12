# Export Contacts

This guide will walk you through the process of exporting selected contacts to downloadable file using the PHP library.

*Required Access Level: Export*

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

In this example we will export contacts to a CSV file.
Create an instance of ContactsApi that will be used to export contacts.

```php
$apiInstance = new ElasticEmail\Api\ContactsApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an options object:

fileFormat - specify format in which file should be created, options are: "Csv" "Xml" "Json".
emails - select contacts to export by providing array of emails
fileName - you can specify file name of your choice

Other options:

rule - eg. rule=Status%20=%20Engaged – Query used for filtering
compressionFormat - "None" "Zip"

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsExportPost

```php
$file_format = 'Csv';
$rule = null;
$emails = ['mail@contact.com,mail1@contact.com,mail2@contact.com'];
$compression_format = 'None';
$file_name = "my-export.csv";

$response = $apiInstance->contactsExportPost($file_format, $rule, $emails, $compression_format, $file_name)
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

$file_format = 'Csv';
$rule = null;
$emails = ['mail@contact.com,mail1@contact.com,mail2@contact.com'];
$compression_format = 'None';
$file_name = "my-export.csv";

try {
    $response = $apiInstance->contactsExportPost($file_format, $rule, $emails, $compression_format, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsExportPost: ', $e->getMessage(), PHP_EOL;
}
```
