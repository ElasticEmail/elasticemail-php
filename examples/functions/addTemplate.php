<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/templatesByNameGet
*
* Snippets
* https://github.com/ElasticEmail/elasticemail-php
*/
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikey
define('MY_APIKEY', 'YOUR_API_KEY');

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', MY_APIKEY);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
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
]); // \ElasticEmail\Model\TemplatePayload

try {
    $response = $apiInstance->templatesPost($template_payload);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesPost: ', $e->getMessage(), PHP_EOL;
}
