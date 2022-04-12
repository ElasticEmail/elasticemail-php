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

Generate and use your API key (remember to check a required access level): 

```php
define('MY_APIKEY', 'YOUR_API_KEY');
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);
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

define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);

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
