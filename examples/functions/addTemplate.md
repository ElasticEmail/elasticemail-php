# Add Template

This guide will walk you through the process of adding a new template to your account using the PHP library. 

*Required Access Level: ModifyTemplates*

## What's a tempalte?
When using Elastic Email you send emails to your contacts. A single template is a body of  email prepared and saved under given name. Till it's deleted it can be reused to send any number of emails.

## Let's dig into the code

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
$apiInstance = new ElasticEmail\Api\TemplatesApi(
    new GuzzleHttp\Client(),
    $config
);
```

Create an instance of TemplatesApi that will be used to create a new template.

```php
const templatesApi = new ElasticEmail.TemplatesApi();
```

Create an object with details about new template:
- Name – name of your template by which it can be identified and used
- Subject – specify default subject for this template
- Body – specify acctual body content eg. in HTML, PlainText or both
- TemplateScope – specify scope, "Personal" template won't be shared, "Global" template can be shared with your sub accounts.

> Find out more by checking our API's documentation: https://elasticemail.com/developers/api-documentation/rest-api#operation/templatesPost

```php
$template_payload = new \ElasticEmail\Model\TemplatePayload([
    "name" => "My New Template",
    "subject" => "Newsletter",
    "body" => [new \ElasticEmail\Model\BodyPart([
        "content_type" => "HTML",
        "content" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
          <head>
            <style type="text/css">
                .mydiv {
                    background: #FFBD5A;
                    text-align: center;
                    padding: 40px;
                }
            </style>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          </head>
        <body>
        <div class="mydiv">
            <h1>My template</h1>
        </div>
        </body>
        </html>'
        ])
    ],
    "template_scope" => "Global"
]);
```

And finally, call `templatesPost` method from the API to create a template: 

```php
$response = $apiInstance->templatesPost($template_payload);
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

$template_payload = new \ElasticEmail\Model\TemplatePayload([
    "name" => "My New Template",
    "subject" => "Newsletter",
    "body" => [new \ElasticEmail\Model\BodyPart([
        "content_type" => "HTML",
        "content" => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
          <head>
            <style type="text/css">
                .mydiv {
                    background: #FFBD5A;
                    text-align: center;
                    padding: 40px;
                }
            </style>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          </head>
        <body>
        <div class="mydiv">
            <h1>My template</h1>
        </div>
        </body>
        </html>'
        ])
    ],
    "template_scope" => "Global"
]);

try {
    $response = $apiInstance->templatesPost($template_payload);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesPost: ', $e->getMessage(), PHP_EOL;
}
```
