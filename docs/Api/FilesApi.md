# ElasticEmail\FilesApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesByNameDelete()**](FilesApi.md#filesByNameDelete) | **DELETE** /files/{name} | Delete File
[**filesByNameGet()**](FilesApi.md#filesByNameGet) | **GET** /files/{name} | Download File
[**filesByNameInfoGet()**](FilesApi.md#filesByNameInfoGet) | **GET** /files/{name}/info | Load File Details
[**filesGet()**](FilesApi.md#filesGet) | **GET** /files | List Files
[**filesPost()**](FilesApi.md#filesPost) | **POST** /files | Upload File


## `filesByNameDelete()`

```php
filesByNameDelete($name)
```

Delete File

Permanently deletes the file from your Account. Required Access Level: ModifyFiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = filename.txt; // string | Name of your file including extension.

try {
    $apiInstance->filesByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

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

## `filesByNameGet()`

```php
filesByNameGet($name): \SplFileObject
```

Download File

Gets content of the specified File. Required Access Level: ViewFiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = filename.txt; // string | Name of your file including extension.

try {
    $result = $apiInstance->filesByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

### Return type

**\SplFileObject**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/_*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filesByNameInfoGet()`

```php
filesByNameInfoGet($name): \ElasticEmail\Model\FileInfo
```

Load File Details

Returns the specified File's details. Required Access Level: ViewFiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = filename.txt; // string | Name of your file including extension.

try {
    $result = $apiInstance->filesByNameInfoGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesByNameInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

### Return type

[**\ElasticEmail\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filesGet()`

```php
filesGet($limit, $offset): \ElasticEmail\Model\FileInfo[]
```

List Files

Returns a list of all your available files. Required Access Level: ViewFiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->filesGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\FileInfo[]**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filesPost()`

```php
filesPost($file_payload, $expires_after_days): \ElasticEmail\Model\FileInfo
```

Upload File

Uploads selected file to the server. Required Access Level: ModifyFiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_payload = new \ElasticEmail\Model\FilePayload(); // \ElasticEmail\Model\FilePayload
$expires_after_days = 56; // int | After how many days should the file be deleted.

try {
    $result = $apiInstance->filesPost($file_payload, $expires_after_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_payload** | [**\ElasticEmail\Model\FilePayload**](../Model/FilePayload.md)|  |
 **expires_after_days** | **int**| After how many days should the file be deleted. | [optional]

### Return type

[**\ElasticEmail\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
