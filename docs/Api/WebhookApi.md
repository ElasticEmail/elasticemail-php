# ElasticEmail\WebhookApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookByPublicidDelete()**](WebhookApi.md#webhookByPublicidDelete) | **DELETE** /webhook/{publicid} | Delete Webhook |
| [**webhookByPublicidGet()**](WebhookApi.md#webhookByPublicidGet) | **GET** /webhook/{publicid} | Load Webhook |
| [**webhookByPublicidPut()**](WebhookApi.md#webhookByPublicidPut) | **PUT** /webhook/{publicid} | Update Webhook |
| [**webhookGet()**](WebhookApi.md#webhookGet) | **GET** /webhook | Load Webhooks |
| [**webhookPost()**](WebhookApi.md#webhookPost) | **POST** /webhook | Add Webhook |


## `webhookByPublicidDelete()`

```php
webhookByPublicidDelete($publicid)
```

Delete Webhook

Delete the specified notifications webhook. Required Access Level: ModifyWebNotifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publicid = 'publicid_example'; // string

try {
    $apiInstance->webhookByPublicidDelete($publicid);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookByPublicidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicid** | **string**|  | |

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

## `webhookByPublicidGet()`

```php
webhookByPublicidGet($publicid): \ElasticEmail\Model\Webhook
```

Load Webhook

Load notifications webhook details. Required Access Level: ViewWebNotifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publicid = 'publicid_example'; // string

try {
    $result = $apiInstance->webhookByPublicidGet($publicid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookByPublicidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicid** | **string**|  | |

### Return type

[**\ElasticEmail\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookByPublicidPut()`

```php
webhookByPublicidPut($publicid, $webhook_update_payload): \ElasticEmail\Model\Webhook
```

Update Webhook

Update notification webhook. Required Access Level: ModifyWebNotifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publicid = 'publicid_example'; // string
$webhook_update_payload = new \ElasticEmail\Model\WebhookUpdatePayload(); // \ElasticEmail\Model\WebhookUpdatePayload

try {
    $result = $apiInstance->webhookByPublicidPut($publicid, $webhook_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookByPublicidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicid** | **string**|  | |
| **webhook_update_payload** | [**\ElasticEmail\Model\WebhookUpdatePayload**](../Model/WebhookUpdatePayload.md)|  | |

### Return type

[**\ElasticEmail\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookGet()`

```php
webhookGet($limit, $offset): \ElasticEmail\Model\Webhook[]
```

Load Webhooks

Returns a list of notification webhooks. Required Access Level: ViewWebNotifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->webhookGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookPost()`

```php
webhookPost($webhook_create_payload): \ElasticEmail\Model\Webhook
```

Add Webhook

Add a notification webhook. Required Access Level: ModifyWebNotifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_create_payload = new \ElasticEmail\Model\WebhookCreatePayload(); // \ElasticEmail\Model\WebhookCreatePayload

try {
    $result = $apiInstance->webhookPost($webhook_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_create_payload** | [**\ElasticEmail\Model\WebhookCreatePayload**](../Model/WebhookCreatePayload.md)|  | |

### Return type

[**\ElasticEmail\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
