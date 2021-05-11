# ElasticEmail\ListsApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsByNameContactsPost()**](ListsApi.md#listsByNameContactsPost) | **POST** /lists/{name}/contacts | Add Contacts to List
[**listsByNameContactsRemovePost()**](ListsApi.md#listsByNameContactsRemovePost) | **POST** /lists/{name}/contacts/remove | Remove Contacts from List
[**listsByNameDelete()**](ListsApi.md#listsByNameDelete) | **DELETE** /lists/{name} | Delete List
[**listsByNameGet()**](ListsApi.md#listsByNameGet) | **GET** /lists/{name} | Load List
[**listsByNamePut()**](ListsApi.md#listsByNamePut) | **PUT** /lists/{name} | Update List
[**listsGet()**](ListsApi.md#listsGet) | **GET** /lists | Load Lists
[**listsPost()**](ListsApi.md#listsPost) | **POST** /lists | Add List


## `listsByNameContactsPost()`

```php
listsByNameContactsPost($name, $emails_payload): \ElasticEmail\Model\ContactsList
```

Add Contacts to List

Add existing Contacts to specified list. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My List 1; // string | Name of your list.
$emails_payload = new \ElasticEmail\Model\EmailsPayload(); // \ElasticEmail\Model\EmailsPayload | Provide either rule or a list of emails, not both.

try {
    $result = $apiInstance->listsByNameContactsPost($name, $emails_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNameContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
 **emails_payload** | [**\ElasticEmail\Model\EmailsPayload**](../Model/EmailsPayload.md)| Provide either rule or a list of emails, not both. |

### Return type

[**\ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsByNameContactsRemovePost()`

```php
listsByNameContactsRemovePost($name, $emails_payload)
```

Remove Contacts from List

Remove specified Contacts from your list. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My List 1; // string | Name of your list.
$emails_payload = new \ElasticEmail\Model\EmailsPayload(); // \ElasticEmail\Model\EmailsPayload | Provide either rule or a list of emails, not both.

try {
    $apiInstance->listsByNameContactsRemovePost($name, $emails_payload);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNameContactsRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
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

## `listsByNameDelete()`

```php
listsByNameDelete($name)
```

Delete List

Deletes List and removes all the Contacts from it (does not delete Contacts). Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My List 1; // string | Name of your list.

try {
    $apiInstance->listsByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |

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

## `listsByNameGet()`

```php
listsByNameGet($name): \ElasticEmail\Model\ContactsList
```

Load List

Returns detailed information about specified list. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My List 1; // string | Name of your list.

try {
    $result = $apiInstance->listsByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |

### Return type

[**\ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsByNamePut()`

```php
listsByNamePut($name, $list_update_payload): \ElasticEmail\Model\ContactsList
```

Update List

Update existing list. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = My List 1; // string | Name of your list.
$list_update_payload = new \ElasticEmail\Model\ListUpdatePayload(); // \ElasticEmail\Model\ListUpdatePayload

try {
    $result = $apiInstance->listsByNamePut($name, $list_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
 **list_update_payload** | [**\ElasticEmail\Model\ListUpdatePayload**](../Model/ListUpdatePayload.md)|  |

### Return type

[**\ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsGet()`

```php
listsGet($limit, $offset): \ElasticEmail\Model\ContactsList[]
```

Load Lists

Returns all your existing lists. Required Access Level: ViewContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->listsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\ContactsList[]**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listsPost()`

```php
listsPost($list_payload): \ElasticEmail\Model\ContactsList
```

Add List

Add a new list. Required Access Level: ModifyContacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_payload = new \ElasticEmail\Model\ListPayload(); // \ElasticEmail\Model\ListPayload

try {
    $result = $apiInstance->listsPost($list_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_payload** | [**\ElasticEmail\Model\ListPayload**](../Model/ListPayload.md)|  |

### Return type

[**\ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
