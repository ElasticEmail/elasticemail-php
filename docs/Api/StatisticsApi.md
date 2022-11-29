# ElasticEmail\StatisticsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**statisticsCampaignsByNameGet()**](StatisticsApi.md#statisticsCampaignsByNameGet) | **GET** /statistics/campaigns/{name} | Load Campaign Stats |
| [**statisticsCampaignsGet()**](StatisticsApi.md#statisticsCampaignsGet) | **GET** /statistics/campaigns | Load Campaigns Stats |
| [**statisticsChannelsByNameGet()**](StatisticsApi.md#statisticsChannelsByNameGet) | **GET** /statistics/channels/{name} | Load Channel Stats |
| [**statisticsChannelsGet()**](StatisticsApi.md#statisticsChannelsGet) | **GET** /statistics/channels | Load Channels Stats |
| [**statisticsGet()**](StatisticsApi.md#statisticsGet) | **GET** /statistics | Load Statistics |


## `statisticsCampaignsByNameGet()`

```php
statisticsCampaignsByNameGet($name): \ElasticEmail\Model\ChannelLogStatusSummary
```

Load Campaign Stats

Retrieve stats of an existing campaign. Required Access Level: ViewChannels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the campaign to get.

try {
    $result = $apiInstance->statisticsCampaignsByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsCampaignsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the campaign to get. | |

### Return type

[**\ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsCampaignsGet()`

```php
statisticsCampaignsGet($limit, $offset): \ElasticEmail\Model\ChannelLogStatusSummary[]
```

Load Campaigns Stats

Returns a list of your Campaigns' stats. Required Access Level: ViewChannels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->statisticsCampaignsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\ChannelLogStatusSummary[]**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsChannelsByNameGet()`

```php
statisticsChannelsByNameGet($name): \ElasticEmail\Model\ChannelLogStatusSummary
```

Load Channel Stats

Retrieve an existing channel stats. Required Access Level: ViewChannels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the channel to get.

try {
    $result = $apiInstance->statisticsChannelsByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsChannelsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the channel to get. | |

### Return type

[**\ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsChannelsGet()`

```php
statisticsChannelsGet($limit, $offset): \ElasticEmail\Model\ChannelLogStatusSummary[]
```

Load Channels Stats

Returns a list of your Channels' stats. Required Access Level: ViewChannels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->statisticsChannelsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsChannelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\ChannelLogStatusSummary[]**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsGet()`

```php
statisticsGet($from, $to): \ElasticEmail\Model\LogStatusSummary
```

Load Statistics

Returns basic statistics. Required Access Level: ViewReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.

try {
    $result = $apiInstance->statisticsGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | |
| **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional] |

### Return type

[**\ElasticEmail\Model\LogStatusSummary**](../Model/LogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
