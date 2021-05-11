# ElasticEmail\InboundRouteApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundrouteByIdDelete()**](InboundRouteApi.md#inboundrouteByIdDelete) | **DELETE** /inboundroute/{id} | Delete Route
[**inboundrouteByIdGet()**](InboundRouteApi.md#inboundrouteByIdGet) | **GET** /inboundroute/{id} | Get Route
[**inboundrouteByIdPut()**](InboundRouteApi.md#inboundrouteByIdPut) | **PUT** /inboundroute/{id} | Update Route
[**inboundrouteGet()**](InboundRouteApi.md#inboundrouteGet) | **GET** /inboundroute | Get Routes
[**inboundrouteOrderPut()**](InboundRouteApi.md#inboundrouteOrderPut) | **PUT** /inboundroute/order | Update Sorting
[**inboundroutePost()**](InboundRouteApi.md#inboundroutePost) | **POST** /inboundroute | Create Route


## `inboundrouteByIdDelete()`

```php
inboundrouteByIdDelete($id)
```

Delete Route

Deletes the Inbound Route. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->inboundrouteByIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundrouteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `inboundrouteByIdGet()`

```php
inboundrouteByIdGet($id): \ElasticEmail\Model\InboundRoute
```

Get Route

Load an Inbound Route. Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123456; // string | ID number of your attachment

try {
    $result = $apiInstance->inboundrouteByIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundrouteByIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID number of your attachment |

### Return type

[**\ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundrouteByIdPut()`

```php
inboundrouteByIdPut($id, $inbound_payload): \ElasticEmail\Model\InboundRoute
```

Update Route

Update the Inbound Route. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$inbound_payload = new \ElasticEmail\Model\InboundPayload(); // \ElasticEmail\Model\InboundPayload

try {
    $result = $apiInstance->inboundrouteByIdPut($id, $inbound_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundrouteByIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **inbound_payload** | [**\ElasticEmail\Model\InboundPayload**](../Model/InboundPayload.md)|  |

### Return type

[**\ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundrouteGet()`

```php
inboundrouteGet(): \ElasticEmail\Model\InboundRoute[]
```

Get Routes

Get all your Inbound Routes. Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inboundrouteGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundrouteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ElasticEmail\Model\InboundRoute[]**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundrouteOrderPut()`

```php
inboundrouteOrderPut($sort_order_item): \ElasticEmail\Model\InboundRoute[]
```

Update Sorting

Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_order_item = array(new \ElasticEmail\Model\SortOrderItem()); // \ElasticEmail\Model\SortOrderItem[] | Change the ordering of inbound routes for when matching the inbound

try {
    $result = $apiInstance->inboundrouteOrderPut($sort_order_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundrouteOrderPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_order_item** | [**\ElasticEmail\Model\SortOrderItem[]**](../Model/SortOrderItem.md)| Change the ordering of inbound routes for when matching the inbound |

### Return type

[**\ElasticEmail\Model\InboundRoute[]**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundroutePost()`

```php
inboundroutePost($inbound_payload): \ElasticEmail\Model\InboundRoute
```

Create Route

Create new Inbound Route. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\InboundRouteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_payload = new \ElasticEmail\Model\InboundPayload(); // \ElasticEmail\Model\InboundPayload

try {
    $result = $apiInstance->inboundroutePost($inbound_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundRouteApi->inboundroutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbound_payload** | [**\ElasticEmail\Model\InboundPayload**](../Model/InboundPayload.md)|  |

### Return type

[**\ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
