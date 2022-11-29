# ElasticEmail\SegmentsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**segmentsByNameDelete()**](SegmentsApi.md#segmentsByNameDelete) | **DELETE** /segments/{name} | Delete Segment |
| [**segmentsByNameGet()**](SegmentsApi.md#segmentsByNameGet) | **GET** /segments/{name} | Load Segment |
| [**segmentsByNamePut()**](SegmentsApi.md#segmentsByNamePut) | **PUT** /segments/{name} | Update Segment |
| [**segmentsGet()**](SegmentsApi.md#segmentsGet) | **GET** /segments | Load Segments |
| [**segmentsPost()**](SegmentsApi.md#segmentsPost) | **POST** /segments | Add Segment |


## `segmentsByNameDelete()`

```php
segmentsByNameDelete($name)
```

Delete Segment

Delete an existing segment. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My Segment 1; // string | Name of your segment.

try {
    $apiInstance->segmentsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your segment. | |

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

## `segmentsByNameGet()`

```php
segmentsByNameGet($name): \ElasticEmail\Model\Segment
```

Load Segment

Returns details for the specified segment. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the segment you want to load. Will load all contacts if the 'All Contacts' name has been provided

try {
    $result = $apiInstance->segmentsByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the segment you want to load. Will load all contacts if the &#39;All Contacts&#39; name has been provided | |

### Return type

[**\ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `segmentsByNamePut()`

```php
segmentsByNamePut($name, $segment_payload): \ElasticEmail\Model\Segment
```

Update Segment

Rename or change RULE for your segment. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My Segment 1; // string | Name of your segment.
$segment_payload = new \ElasticEmail\Model\SegmentPayload(); // \ElasticEmail\Model\SegmentPayload

try {
    $result = $apiInstance->segmentsByNamePut($name, $segment_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of your segment. | |
| **segment_payload** | [**\ElasticEmail\Model\SegmentPayload**](../Model/SegmentPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `segmentsGet()`

```php
segmentsGet($limit, $offset): \ElasticEmail\Model\Segment[]
```

Load Segments

Returns a list of all your available Segments. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->segmentsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\Segment[]**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `segmentsPost()`

```php
segmentsPost($segment_payload): \ElasticEmail\Model\Segment
```

Add Segment

Add a new segment, based on specified RULE. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_payload = new \ElasticEmail\Model\SegmentPayload(); // \ElasticEmail\Model\SegmentPayload

try {
    $result = $apiInstance->segmentsPost($segment_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->segmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segment_payload** | [**\ElasticEmail\Model\SegmentPayload**](../Model/SegmentPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
