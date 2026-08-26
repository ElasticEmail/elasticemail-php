<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsImportPost
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

$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$list_name = "My Contacts 1"; // string | Name of an existing list to add these contacts to
$encoding_name = "UTF-8"; // string | In what encoding the file is uploaded
$file = "my-contacts.csv"; // \SplFileObject

try {
    $response = $apiInstance->contactsImportPost($list_name, $encoding_name, $file);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsImportPost: ', $e->getMessage(), PHP_EOL;
}
