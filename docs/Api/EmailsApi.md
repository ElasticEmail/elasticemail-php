# ElasticEmail\EmailsApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailsByMsgidViewGet()**](EmailsApi.md#emailsByMsgidViewGet) | **GET** /emails/{msgid}/view | View Email
[**emailsMergefilePost()**](EmailsApi.md#emailsMergefilePost) | **POST** /emails/mergefile | Send Bulk Emails CSV
[**emailsPost()**](EmailsApi.md#emailsPost) | **POST** /emails | Send Bulk Emails
[**emailsTransactionalPost()**](EmailsApi.md#emailsTransactionalPost) | **POST** /emails/transactional | Send Transactional Email


## `emailsByMsgidViewGet()`

```php
emailsByMsgidViewGet($msgid): \ElasticEmail\Model\EmailData
```

View Email

Returns email details for viewing or rendering. Required Access Level: None

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$msgid = 'msgid_example'; // string | Message identifier

try {
    $result = $apiInstance->emailsByMsgidViewGet($msgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsByMsgidViewGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msgid** | **string**| Message identifier |

### Return type

[**\ElasticEmail\Model\EmailData**](../Model/EmailData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailsMergefilePost()`

```php
emailsMergefilePost($merge_email_payload): \ElasticEmail\Model\EmailSend
```

Send Bulk Emails CSV

Send bulk merge email. Required Access Level: SendHttp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merge_email_payload = new \ElasticEmail\Model\MergeEmailPayload(); // \ElasticEmail\Model\MergeEmailPayload | Email data

try {
    $result = $apiInstance->emailsMergefilePost($merge_email_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsMergefilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merge_email_payload** | [**\ElasticEmail\Model\MergeEmailPayload**](../Model/MergeEmailPayload.md)| Email data |

### Return type

[**\ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailsPost()`

```php
emailsPost($email_message_data): \ElasticEmail\Model\EmailSend
```

Send Bulk Emails

Send bulk merge email. Required Access Level: SendHttp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_message_data = new \ElasticEmail\Model\EmailMessageData(); // \ElasticEmail\Model\EmailMessageData | Email data

try {
    $result = $apiInstance->emailsPost($email_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_message_data** | [**\ElasticEmail\Model\EmailMessageData**](../Model/EmailMessageData.md)| Email data |

### Return type

[**\ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailsTransactionalPost()`

```php
emailsTransactionalPost($email_transactional_message_data): \ElasticEmail\Model\EmailSend
```

Send Transactional Email

Send transactional emails (recipients will be known to each other). Required Access Level: SendHttp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_transactional_message_data = new \ElasticEmail\Model\EmailTransactionalMessageData(); // \ElasticEmail\Model\EmailTransactionalMessageData | Email data

try {
    $result = $apiInstance->emailsTransactionalPost($email_transactional_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->emailsTransactionalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_transactional_message_data** | [**\ElasticEmail\Model\EmailTransactionalMessageData**](../Model/EmailTransactionalMessageData.md)| Email data |

### Return type

[**\ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
