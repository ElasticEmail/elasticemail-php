# ElasticEmail\VerificationsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**verificationsByEmailDelete()**](VerificationsApi.md#verificationsByEmailDelete) | **DELETE** /verifications/{email} | Delete Email Verification Result |
| [**verificationsByEmailGet()**](VerificationsApi.md#verificationsByEmailGet) | **GET** /verifications/{email} | Get Email Verification Result |
| [**verificationsByEmailPost()**](VerificationsApi.md#verificationsByEmailPost) | **POST** /verifications/{email} | Verify Email |
| [**verificationsFilesByIdDelete()**](VerificationsApi.md#verificationsFilesByIdDelete) | **DELETE** /verifications/files/{id} | Delete File Verification Result |
| [**verificationsFilesByIdResultDownloadGet()**](VerificationsApi.md#verificationsFilesByIdResultDownloadGet) | **GET** /verifications/files/{id}/result/download | Download File Verification Result |
| [**verificationsFilesByIdResultGet()**](VerificationsApi.md#verificationsFilesByIdResultGet) | **GET** /verifications/files/{id}/result | Get Detailed File Verification Result |
| [**verificationsFilesByIdVerificationPost()**](VerificationsApi.md#verificationsFilesByIdVerificationPost) | **POST** /verifications/files/{id}/verification | Start verification |
| [**verificationsFilesPost()**](VerificationsApi.md#verificationsFilesPost) | **POST** /verifications/files | Upload File with Emails |
| [**verificationsFilesResultGet()**](VerificationsApi.md#verificationsFilesResultGet) | **GET** /verifications/files/result | Get Files Verification Results |
| [**verificationsGet()**](VerificationsApi.md#verificationsGet) | **GET** /verifications | Get Emails Verification Results |


## `verificationsByEmailDelete()`

```php
verificationsByEmailDelete($email)
```

Delete Email Verification Result

Delete a result with given email if exists. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email address to verification

try {
    $apiInstance->verificationsByEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsByEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address to verification | |

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

## `verificationsByEmailGet()`

```php
verificationsByEmailGet($email): \ElasticEmail\Model\EmailValidationResult
```

Get Email Verification Result

Returns a result of verified email. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email address to view verification result of

try {
    $result = $apiInstance->verificationsByEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsByEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address to view verification result of | |

### Return type

[**\ElasticEmail\Model\EmailValidationResult**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsByEmailPost()`

```php
verificationsByEmailPost($email): \ElasticEmail\Model\EmailValidationResult
```

Verify Email

Verify single email address and returns result of verification. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Email address to verify

try {
    $result = $apiInstance->verificationsByEmailPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsByEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address to verify | |

### Return type

[**\ElasticEmail\Model\EmailValidationResult**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsFilesByIdDelete()`

```php
verificationsFilesByIdDelete($id)
```

Delete File Verification Result

Delete Verification Results if they exist. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = E33EBA7A-C20D-4D3D-8F2F-5EEF42F58E6F; // string | ID of the exported file

try {
    $apiInstance->verificationsFilesByIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesByIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the exported file | |

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

## `verificationsFilesByIdResultDownloadGet()`

```php
verificationsFilesByIdResultDownloadGet($id): \SplFileObject
```

Download File Verification Result

Download verification results as a ZIP file. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Verification ID to download

try {
    $result = $apiInstance->verificationsFilesByIdResultDownloadGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesByIdResultDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Verification ID to download | |

### Return type

**\SplFileObject**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsFilesByIdResultGet()`

```php
verificationsFilesByIdResultGet($id, $limit, $offset): \ElasticEmail\Model\VerificationFileResultDetails
```

Get Detailed File Verification Result

Returns status and results (if verified) of file with given ID. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the Verification to display status of
$limit = 56; // int | Maximum number of returned email verification results
$offset = 56; // int | How many result items should be returned ahead

try {
    $result = $apiInstance->verificationsFilesByIdResultGet($id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesByIdResultGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the Verification to display status of | |
| **limit** | **int**| Maximum number of returned email verification results | [optional] |
| **offset** | **int**| How many result items should be returned ahead | [optional] |

### Return type

[**\ElasticEmail\Model\VerificationFileResultDetails**](../Model/VerificationFileResultDetails.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsFilesByIdVerificationPost()`

```php
verificationsFilesByIdVerificationPost($id)
```

Start verification

Start a verification of the previously uploaded file with emails. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | File ID to start verification

try {
    $apiInstance->verificationsFilesByIdVerificationPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesByIdVerificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| File ID to start verification | |

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

## `verificationsFilesPost()`

```php
verificationsFilesPost($file): \ElasticEmail\Model\VerificationFileResult
```

Upload File with Emails

Uploads a CSV file with list of emails that can then be triggered for verification. An 'email' column is required. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->verificationsFilesPost($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\ElasticEmail\Model\VerificationFileResult**](../Model/VerificationFileResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsFilesResultGet()`

```php
verificationsFilesResultGet(): \ElasticEmail\Model\VerificationFileResult[]
```

Get Files Verification Results

Returns a list of uploaded files, their statuses and results. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->verificationsFilesResultGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsFilesResultGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ElasticEmail\Model\VerificationFileResult[]**](../Model/VerificationFileResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verificationsGet()`

```php
verificationsGet($limit, $offset): \ElasticEmail\Model\EmailValidationResult[]
```

Get Emails Verification Results

Returns a results of all verified single emails. Required Access Level: VerifyEmails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->verificationsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->verificationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\EmailValidationResult[]**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
