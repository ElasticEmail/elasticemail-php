# Load Template

This guide will walk you through steps of loading existing template details using the PHP library.

*Required Access Level: ViewTemplates*

## What's a template?
When using Elastic Email you send emails to your contacts. A single template is a body of  email prepared and saved under given name. Till it's deleted it can be reused to send any number of emails.

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

Create an instance of TemplatesApi that will be used to load a template.

```php
$apiInstance = new ElasticEmail\Api\TemplatesApi(
    new GuzzleHttp\Client(),
    $config
);
```

To load a template you need to specfiy it's name:

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/templatesPost

```php
$name = "My New List";
$response = $apiInstance->listsByNameGet($name);
```

## The whole code to copy and paste:

```php
require_once(__DIR__ . '/vendor/autoload.php');

$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);

$apiInstance = new ElasticEmail\Api\TemplatesApi(
    new GuzzleHttp\Client(),
    $config
);

$name = "My Template";

try {
    $response = $apiInstance->templatesByNameGet($name);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesByNameGet: ', $e->getMessage(), PHP_EOL;
}
```
