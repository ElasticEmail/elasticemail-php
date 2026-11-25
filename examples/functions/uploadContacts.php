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
$apiKey = getenv('ELASTICEMAIL_API_KEY');
if (!$apiKey) {
    throw new RuntimeException('Set the ELASTICEMAIL_API_KEY environment variable');
}

$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', $apiKey);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');

$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$list_name = "My New List"; // string | Name of an existing list to add these contacts to (optional)
$encoding_name = "utf-8"; // string | In what encoding the file is uploaded
$file = __DIR__ . '/files/contacts.csv'; // string | Path to the CSV file, sent as the multipart "file" field

try {
    $apiInstance->contactsImportPost($list_name, $encoding_name, null, $file);
    echo 'Contacts uploaded', PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsImportPost: ', $e->getMessage(), PHP_EOL;
}
