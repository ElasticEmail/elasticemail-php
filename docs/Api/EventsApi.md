# ElasticEmail\EventsApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsByTransactionidGet()**](EventsApi.md#eventsByTransactionidGet) | **GET** /events/{transactionid} | Load Email Events
[**eventsChannelsByNameExportPost()**](EventsApi.md#eventsChannelsByNameExportPost) | **POST** /events/channels/{name}/export | Export Channel Events
[**eventsChannelsByNameGet()**](EventsApi.md#eventsChannelsByNameGet) | **GET** /events/channels/{name} | Load Channel Events
[**eventsChannelsExportByIdStatusGet()**](EventsApi.md#eventsChannelsExportByIdStatusGet) | **GET** /events/channels/export/{id}/status | Check Channel Export Status
[**eventsExportByIdStatusGet()**](EventsApi.md#eventsExportByIdStatusGet) | **GET** /events/export/{id}/status | Check Export Status
[**eventsExportPost()**](EventsApi.md#eventsExportPost) | **POST** /events/export | Export Events
[**eventsGet()**](EventsApi.md#eventsGet) | **GET** /events | Load Events


## `eventsByTransactionidGet()`

```php
eventsByTransactionidGet($transactionid, $from, $to, $order_by, $limit, $offset): \ElasticEmail\Model\RecipientEvent[]
```

Load Email Events

Returns a log of delivery events for the specific transaction ID. Required Access Level: ViewReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactionid = TransactionID; // string | ID number of transaction
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$order_by = new \ElasticEmail\Model\\ElasticEmail\Model\EventsOrderBy(); // \ElasticEmail\Model\EventsOrderBy
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->eventsByTransactionidGet($transactionid, $from, $to, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsByTransactionidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionid** | **string**| ID number of transaction |
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **order_by** | [**\ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\RecipientEvent[]**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsChannelsByNameExportPost()`

```php
eventsChannelsByNameExportPost($name, $event_types, $from, $to, $file_format, $compression_format, $file_name): \ElasticEmail\Model\ExportLink
```

Export Channel Events

Export delivery events log information to the specified file format. Required Access Level: Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Channel01; // string | Name of selected channel.
$event_types = array(new \ElasticEmail\Model\\ElasticEmail\Model\EventType()); // \ElasticEmail\Model\EventType[] | Types of Events to return
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$file_format = new \ElasticEmail\Model\\ElasticEmail\Model\ExportFileFormats(); // \ElasticEmail\Model\ExportFileFormats | Format of the exported file
$compression_format = new \ElasticEmail\Model\\ElasticEmail\Model\CompressionFormat(); // \ElasticEmail\Model\CompressionFormat | FileResponse compression format. None or Zip.
$file_name = filename.txt; // string | Name of your file including extension.

try {
    $result = $apiInstance->eventsChannelsByNameExportPost($name, $event_types, $from, $to, $file_format, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsChannelsByNameExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of selected channel. |
 **event_types** | [**\ElasticEmail\Model\EventType[]**](../Model/\ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **file_format** | [**\ElasticEmail\Model\ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **compression_format** | [**\ElasticEmail\Model\CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
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

## `eventsChannelsByNameGet()`

```php
eventsChannelsByNameGet($name, $event_types, $from, $to, $order_by, $limit, $offset): \ElasticEmail\Model\RecipientEvent[]
```

Load Channel Events

Returns a log of delivery events filtered by specified parameters. Required Access Level: ViewReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Channel01; // string | Name of selected channel.
$event_types = array(new \ElasticEmail\Model\\ElasticEmail\Model\EventType()); // \ElasticEmail\Model\EventType[] | Types of Events to return
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$order_by = new \ElasticEmail\Model\\ElasticEmail\Model\EventsOrderBy(); // \ElasticEmail\Model\EventsOrderBy
$limit = 56; // int | How many items to load. Maximum for this request is 1000 items
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->eventsChannelsByNameGet($name, $event_types, $from, $to, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsChannelsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of selected channel. |
 **event_types** | [**\ElasticEmail\Model\EventType[]**](../Model/\ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **order_by** | [**\ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| How many items to load. Maximum for this request is 1000 items | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\RecipientEvent[]**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsChannelsExportByIdStatusGet()`

```php
eventsChannelsExportByIdStatusGet($id): \ElasticEmail\Model\ExportStatus
```

Check Channel Export Status

Check the current status of the channel export. Required Access Level: Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = E33EBA7A-C20D-4D3D-8F2F-5EEF42F58E6F; // string | ID of the exported file

try {
    $result = $apiInstance->eventsChannelsExportByIdStatusGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsChannelsExportByIdStatusGet: ', $e->getMessage(), PHP_EOL;
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

## `eventsExportByIdStatusGet()`

```php
eventsExportByIdStatusGet($id): \ElasticEmail\Model\ExportStatus
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


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = E33EBA7A-C20D-4D3D-8F2F-5EEF42F58E6F; // string | ID of the exported file

try {
    $result = $apiInstance->eventsExportByIdStatusGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsExportByIdStatusGet: ', $e->getMessage(), PHP_EOL;
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

## `eventsExportPost()`

```php
eventsExportPost($event_types, $from, $to, $file_format, $compression_format, $file_name): \ElasticEmail\Model\ExportLink
```

Export Events

Export delivery events log information to the specified file format. Required Access Level: Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_types = array(new \ElasticEmail\Model\\ElasticEmail\Model\EventType()); // \ElasticEmail\Model\EventType[] | Types of Events to return
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$file_format = new \ElasticEmail\Model\\ElasticEmail\Model\ExportFileFormats(); // \ElasticEmail\Model\ExportFileFormats | Format of the exported file
$compression_format = new \ElasticEmail\Model\\ElasticEmail\Model\CompressionFormat(); // \ElasticEmail\Model\CompressionFormat | FileResponse compression format. None or Zip.
$file_name = filename.txt; // string | Name of your file including extension.

try {
    $result = $apiInstance->eventsExportPost($event_types, $from, $to, $file_format, $compression_format, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_types** | [**\ElasticEmail\Model\EventType[]**](../Model/\ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **file_format** | [**\ElasticEmail\Model\ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **compression_format** | [**\ElasticEmail\Model\CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
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

## `eventsGet()`

```php
eventsGet($event_types, $from, $to, $order_by, $limit, $offset): \ElasticEmail\Model\RecipientEvent[]
```

Load Events

Returns a log of delivery events filtered by specified parameters. Required Access Level: ViewReports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_types = array(new \ElasticEmail\Model\\ElasticEmail\Model\EventType()); // \ElasticEmail\Model\EventType[] | Types of Events to return
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Starting date for search in YYYY-MM-DDThh:mm:ss format.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Ending date for search in YYYY-MM-DDThh:mm:ss format.
$order_by = new \ElasticEmail\Model\\ElasticEmail\Model\EventsOrderBy(); // \ElasticEmail\Model\EventsOrderBy
$limit = 56; // int | How many items to load. Maximum for this request is 1000 items
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->eventsGet($event_types, $from, $to, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_types** | [**\ElasticEmail\Model\EventType[]**](../Model/\ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **order_by** | [**\ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| How many items to load. Maximum for this request is 1000 items | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\RecipientEvent[]**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
