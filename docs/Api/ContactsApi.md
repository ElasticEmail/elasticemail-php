# ElasticEmail\ContactsApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsByEmailDelete()**](ContactsApi.md#contactsByEmailDelete) | **DELETE** /contacts/{email} | Delete Contact
[**contactsByEmailGet()**](ContactsApi.md#contactsByEmailGet) | **GET** /contacts/{email} | Load Contact
[**contactsByEmailHistoryGet()**](ContactsApi.md#contactsByEmailHistoryGet) | **GET** /contacts/{email}/history | Load History
[**contactsByEmailPut()**](ContactsApi.md#contactsByEmailPut) | **PUT** /contacts/{email} | Update Contact
[**contactsDeletePost()**](ContactsApi.md#contactsDeletePost) | **POST** /contacts/delete | Delete Contacts Bulk
[**contactsExportByIdStatusGet()**](ContactsApi.md#contactsExportByIdStatusGet) | **GET** /contacts/export/{id}/status | Check Export Status
[**contactsExportPost()**](ContactsApi.md#contactsExportPost) | **POST** /contacts/export | Export Contacts
[**contactsGet()**](ContactsApi.md#contactsGet) | **GET** /contacts | Load Contacts
[**contactsImportPost()**](ContactsApi.md#contactsImportPost) | **POST** /contacts/import | Upload Contacts
[**contactsPost()**](ContactsApi.md#contactsPost) | **POST** /contacts | Add Contact


## `contactsByEmailDelete()`

```php
contactsByEmailDelete($email)
```

Delete Contact

Deletes the provided contact. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Proper email address.

try {
    $apiInstance->contactsByEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsByEmailGet()`

```php
contactsByEmailGet($email): \ElasticEmail\Model\Contact
```

Load Contact

Load detailed contact information for specified email. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Proper email address.

try {
    $result = $apiInstance->contactsByEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |

### Return type

[**\ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsByEmailHistoryGet()`

```php
contactsByEmailHistoryGet($email, $limit, $offset): \ElasticEmail\Model\ContactHistory[]
```

Load History

Returns detailed history of specified Contact. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Proper email address.
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->contactsByEmailHistoryGet($email, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\ContactHistory[]**](../Model/ContactHistory.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsByEmailPut()`

```php
contactsByEmailPut($email, $contact_update_payload): \ElasticEmail\Model\Contact
```

Update Contact

Update selected contact. Omitted contact's fields will not be changed. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Proper email address.
$contact_update_payload = new \ElasticEmail\Model\ContactUpdatePayload(); // \ElasticEmail\Model\ContactUpdatePayload

try {
    $result = $apiInstance->contactsByEmailPut($email, $contact_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsByEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |
 **contact_update_payload** | [**\ElasticEmail\Model\ContactUpdatePayload**](../Model/ContactUpdatePayload.md)|  |

### Return type

[**\ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsDeletePost()`

```php
contactsDeletePost($emails_payload)
```

Delete Contacts Bulk

Deletes provided contacts in bulk. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emails_payload = new \ElasticEmail\Model\EmailsPayload(); // \ElasticEmail\Model\EmailsPayload | Provide either rule or a list of emails, not both.

try {
    $apiInstance->contactsDeletePost($emails_payload);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emails_payload** | [**\ElasticEmail\Model\EmailsPayload**](../Model/EmailsPayload.md)| Provide either rule or a list of emails, not both. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsExportByIdStatusGet()`

```php
contactsExportByIdStatusGet($id): \ElasticEmail\Model\ExportStatus
```

Check Export Status

Check the current status of the export. Required Access Level: Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = E33EBA7A-C20D-4D3D-8F2F-5EEF42F58E6F; // string | ID of the exported file

try {
    $result = $apiInstance->contactsExportByIdStatusGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsExportByIdStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the exported file |

### Return type

[**\ElasticEmail\Model\ExportStatus**](../Model/ExportStatus.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsExportPost()`

```php
contactsExportPost($file_format, $rule, $emails, $compression_format, $file_name): \ElasticEmail\Model\ExportLink
```

Export Contacts

Request an Export of specified Contacts. Required Access Level: Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_format = new \ElasticEmail\Model\ExportFileFormats(); // ExportFileFormats | Format of the exported file
$rule = Status%20=%20Engaged; // string | Query used for filtering.
$emails = ["mail@contact.com,mail1@contact.com,mail2@contact.com"]; // string[] | Comma delimited list of contact emails
$compression_format = new \ElasticEmail\Model\CompressionFormat(); // CompressionFormat | FileResponse compression format. None or Zip.
$file_name = filename.txt; // string | Name of your file including extension.

try {
    $result = $apiInstance->contactsExportPost($file_format, $rule, $emails, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_format** | [**ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **rule** | **string**| Query used for filtering. | [optional]
 **emails** | [**string[]**](../Model/string.md)| Comma delimited list of contact emails | [optional]
 **compression_format** | [**CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
 **file_name** | **string**| Name of your file including extension. | [optional]

### Return type

[**\ElasticEmail\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsGet()`

```php
contactsGet($limit, $offset): \ElasticEmail\Model\Contact[]
```

Load Contacts

Returns a list of contacts. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->contactsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\Contact[]**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsImportPost()`

```php
contactsImportPost($list_name, $encoding_name, $file)
```

Upload Contacts

Upload contacts from a file. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_name = 'list_name_example'; // string | Name of an existing list to add these contacts to
$encoding_name = 'encoding_name_example'; // string | In what encoding the file is uploaded
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->contactsImportPost($list_name, $encoding_name, $file);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_name** | **string**| Name of an existing list to add these contacts to | [optional]
 **encoding_name** | **string**| In what encoding the file is uploaded | [optional]
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsPost()`

```php
contactsPost($contact_payload, $listnames): \ElasticEmail\Model\Contact[]
```

Add Contact

Add new Contacts to your Lists. Up to 1000 can be added (for more please refer to the import request). Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_payload = array(new \ElasticEmail\Model\ContactPayload()); // \ElasticEmail\Model\ContactPayload[]
$listnames = array('listnames_example'); // string[] | Names of lists to which the uploaded contacts should be added to

try {
    $result = $apiInstance->contactsPost($contact_payload, $listnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_payload** | [**\ElasticEmail\Model\ContactPayload[]**](../Model/ContactPayload.md)|  |
 **listnames** | [**string[]**](../Model/string.md)| Names of lists to which the uploaded contacts should be added to | [optional]

### Return type

[**\ElasticEmail\Model\Contact[]**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
