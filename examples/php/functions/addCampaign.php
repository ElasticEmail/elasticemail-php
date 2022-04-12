<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/campaignsPost
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

$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$campaign = new \ElasticEmail\Model\Campaign([
    "name" => "My Campaign",
    "recipients" => new \ElasticEmail\Model\CampaignRecipient([
            "list_names" => ["My Contacts 1"]
    ]),
    "content" => [
        new \ElasticEmail\Model\CampaignTemplate([
            "poolname" => "My Custom Pool",
            "from" => "email@domain.com",
            "reply_to" => "email@domain.com",
            "subject" => "Hello",
            "template_name" => "Template-name",
        ])
    ],
]); // \ElasticEmail\Model\Campaign | JSON representation of a campaign

try {
    $response = $apiInstance->campaignsPost($campaign);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsPost: ', $e->getMessage(), PHP_EOL;
}
