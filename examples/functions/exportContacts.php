<?php
/*
* API Docs
* https://elasticemail.com/developers/api-documentation/rest-api#operation/contactsExportPost
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

$file_format = 'Csv'; // \ElasticEmail\Model\ExportFileFormats | Format of the exported file
$rule = null; // string | Query used for filtering.
$emails = ['mail@contact.com,mail1@contact.com,mail2@contact.com']; // string[] | Comma delimited list of contact emails
$compression_format = 'None'; // \ElasticEmail\Model\CompressionFormat | FileResponse compression format. None or Zip.
$file_name = "my-export.csv"; // string | Name of your file including extension.

try {
    $response = $apiInstance->contactsExportPost($file_format, $rule, $emails, $compression_format, $file_name);
    print('<pre>' . print_r( $response, true) . '</pre>');
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsExportPost: ', $e->getMessage(), PHP_EOL;
}
