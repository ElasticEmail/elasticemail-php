# ElasticEmail\SubAccountsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subaccountsByEmailCreditsPatch()**](SubAccountsApi.md#subaccountsByEmailCreditsPatch) | **PATCH** /subaccounts/{email}/credits | Add, Subtract Email Credits |
| [**subaccountsByEmailDelete()**](SubAccountsApi.md#subaccountsByEmailDelete) | **DELETE** /subaccounts/{email} | Delete SubAccount |
| [**subaccountsByEmailGet()**](SubAccountsApi.md#subaccountsByEmailGet) | **GET** /subaccounts/{email} | Load SubAccount |
| [**subaccountsByEmailSettingsEmailPut()**](SubAccountsApi.md#subaccountsByEmailSettingsEmailPut) | **PUT** /subaccounts/{email}/settings/email | Update SubAccount Email Settings |
| [**subaccountsGet()**](SubAccountsApi.md#subaccountsGet) | **GET** /subaccounts | Load SubAccounts |
| [**subaccountsPost()**](SubAccountsApi.md#subaccountsPost) | **POST** /subaccounts | Add SubAccount |


## `subaccountsByEmailCreditsPatch()`

```php
subaccountsByEmailCreditsPatch($email, $subaccount_email_credits_payload)
```

Add, Subtract Email Credits

Update email credits of a subaccount by the given amount. Required Access Level: ModifySubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Email address of Sub-Account
$subaccount_email_credits_payload = new \ElasticEmail\Model\SubaccountEmailCreditsPayload(); // \ElasticEmail\Model\SubaccountEmailCreditsPayload | Amount of email credits to add or subtract from the current SubAccount email credits pool (positive or negative value)

try {
    $apiInstance->subaccountsByEmailCreditsPatch($email, $subaccount_email_credits_payload);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsByEmailCreditsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address of Sub-Account | |
| **subaccount_email_credits_payload** | [**\ElasticEmail\Model\SubaccountEmailCreditsPayload**](../Model/SubaccountEmailCreditsPayload.md)| Amount of email credits to add or subtract from the current SubAccount email credits pool (positive or negative value) | |

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

## `subaccountsByEmailDelete()`

```php
subaccountsByEmailDelete($email)
```

Delete SubAccount

Deletes specified SubAccount. An email will be sent to confirm this change. Required Access Level: ModifySubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Email address of Sub-Account

try {
    $apiInstance->subaccountsByEmailDelete($email);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsByEmailDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address of Sub-Account | |

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

## `subaccountsByEmailGet()`

```php
subaccountsByEmailGet($email): \ElasticEmail\Model\SubAccountInfo
```

Load SubAccount

Returns details for the specified SubAccount. Required Access Level: ViewSubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = mail@example.com; // string | Email address of Sub-Account

try {
    $result = $apiInstance->subaccountsByEmailGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsByEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address of Sub-Account | |

### Return type

[**\ElasticEmail\Model\SubAccountInfo**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountsByEmailSettingsEmailPut()`

```php
subaccountsByEmailSettingsEmailPut($email, $subaccount_email_settings): \ElasticEmail\Model\SubaccountEmailSettings
```

Update SubAccount Email Settings

Update SubAccount email settings. Required Access Level: ModifySubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string
$subaccount_email_settings = new \ElasticEmail\Model\SubaccountEmailSettings(); // \ElasticEmail\Model\SubaccountEmailSettings | Updated Email Settings

try {
    $result = $apiInstance->subaccountsByEmailSettingsEmailPut($email, $subaccount_email_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsByEmailSettingsEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **subaccount_email_settings** | [**\ElasticEmail\Model\SubaccountEmailSettings**](../Model/SubaccountEmailSettings.md)| Updated Email Settings | |

### Return type

[**\ElasticEmail\Model\SubaccountEmailSettings**](../Model/SubaccountEmailSettings.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountsGet()`

```php
subaccountsGet($limit, $offset): \ElasticEmail\Model\SubAccountInfo[]
```

Load SubAccounts

Returns a list of all your SubAccounts. Required Access Level: ViewSubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->subaccountsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of returned items. | [optional] |
| **offset** | **int**| How many items should be returned ahead. | [optional] |

### Return type

[**\ElasticEmail\Model\SubAccountInfo[]**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subaccountsPost()`

```php
subaccountsPost($subaccount_payload): \ElasticEmail\Model\SubAccountInfo
```

Add SubAccount

Add a new SubAccount to your Account. To receive an access token for this SubAccount, make a POST security/apikeys request using the 'subaccount' parameter. Required Access Level: ModifySubAccounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SubAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount_payload = new \ElasticEmail\Model\SubaccountPayload(); // \ElasticEmail\Model\SubaccountPayload

try {
    $result = $apiInstance->subaccountsPost($subaccount_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountsApi->subaccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subaccount_payload** | [**\ElasticEmail\Model\SubaccountPayload**](../Model/SubaccountPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\SubAccountInfo**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
