# Delete Template

This guide will walk you through steps of deleting a template from your account using the PHP library.

*Required Access Level: ModifyTemplates*

## What's a template?
A template is a saved email design (subject, HTML and plain-text body) that you can reuse in campaigns and transactional emails.

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

Create an instance of TemplatesApi:

```php
$apiInstance = new ElasticEmail\Api\TemplatesApi(
    new GuzzleHttp\Client(),
    $config
);
```

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/templatesByNameDelete

The only thing needed is the template name:

```php
$name = "My New Template";
```

And finally, call `templatesByNameDelete` method from the API to delete the template:

```php
$apiInstance->templatesByNameDelete($name);
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

$name = "My New Template";

try {
    $apiInstance->templatesByNameDelete($name);
    echo 'Template deleted', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```
