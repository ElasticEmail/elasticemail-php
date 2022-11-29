# ElasticEmail\CampaignsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**campaignsByNameDelete()**](CampaignsApi.md#campaignsByNameDelete) | **DELETE** /campaigns/{name} | Delete Campaign |
| [**campaignsByNameGet()**](CampaignsApi.md#campaignsByNameGet) | **GET** /campaigns/{name} | Load Campaign |
| [**campaignsByNamePut()**](CampaignsApi.md#campaignsByNamePut) | **PUT** /campaigns/{name} | Update Campaign |
| [**campaignsGet()**](CampaignsApi.md#campaignsGet) | **GET** /campaigns | Load Campaigns |
| [**campaignsPost()**](CampaignsApi.md#campaignsPost) | **POST** /campaigns | Add Campaign |


## `campaignsByNameDelete()`

```php
campaignsByNameDelete($name)
```

Delete Campaign

Delete the specific campaign.  This does not cancel in progress email, see Cancel In Progress. Required Access Level: ModifyCampaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of Campaign to delete

try {
    $apiInstance->campaignsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of Campaign to delete | |

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

## `campaignsByNameGet()`

```php
campaignsByNameGet($name): \ElasticEmail\Model\Campaign
```

Load Campaign

Returns the specified campaign details. Required Access Level: ViewCampaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of Campaign to get

try {
    $result = $apiInstance->campaignsByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of Campaign to get | |

### Return type

[**\ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsByNamePut()`

```php
campaignsByNamePut($name, $campaign): \ElasticEmail\Model\Campaign
```

Update Campaign

Updates a previously added campaign.  Only Active and Paused campaigns can be updated. Required Access Level: ModifyCampaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of Campaign to update
$campaign = new \ElasticEmail\Model\Campaign(); // \ElasticEmail\Model\Campaign | JSON representation of a campaign

try {
    $result = $apiInstance->campaignsByNamePut($name, $campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of Campaign to update | |
| **campaign** | [**\ElasticEmail\Model\Campaign**](../Model/Campaign.md)| JSON representation of a campaign | |

### Return type

[**\ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsGet()`

```php
campaignsGet($search, $offset, $limit): \ElasticEmail\Model\Campaign[]
```

Load Campaigns

Returns a list all of your campaigns. Limited to 1000 results. Required Access Level: ViewCampaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Text fragment used for searching in Campaign name (using the 'contains' rule)
$offset = 20; // int | How many items should be returned ahead.
$limit = 100; // int | Maximum number of returned items.

try {
    $result = $apiInstance->campaignsGet($search, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Text fragment used for searching in Campaign name (using the &#39;contains&#39; rule) | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |
| **limit** | **int**| Maximum number of returned items. | [optional] |

### Return type

[**\ElasticEmail\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignsPost()`

```php
campaignsPost($campaign): \ElasticEmail\Model\Campaign
```

Add Campaign

Add a campaign for processing. Required Access Level: ModifyCampaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign = new \ElasticEmail\Model\Campaign(); // \ElasticEmail\Model\Campaign | JSON representation of a campaign

try {
    $result = $apiInstance->campaignsPost($campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign** | [**\ElasticEmail\Model\Campaign**](../Model/Campaign.md)| JSON representation of a campaign | |

### Return type

[**\ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
