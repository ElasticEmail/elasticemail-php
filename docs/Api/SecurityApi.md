# ElasticEmail\SecurityApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securityApikeysByNameDelete()**](SecurityApi.md#securityApikeysByNameDelete) | **DELETE** /security/apikeys/{name} | Delete ApiKey |
| [**securityApikeysByNameGet()**](SecurityApi.md#securityApikeysByNameGet) | **GET** /security/apikeys/{name} | Load ApiKey |
| [**securityApikeysByNamePut()**](SecurityApi.md#securityApikeysByNamePut) | **PUT** /security/apikeys/{name} | Update ApiKey |
| [**securityApikeysGet()**](SecurityApi.md#securityApikeysGet) | **GET** /security/apikeys | List ApiKeys |
| [**securityApikeysPost()**](SecurityApi.md#securityApikeysPost) | **POST** /security/apikeys | Add ApiKey |
| [**securitySmtpByNameDelete()**](SecurityApi.md#securitySmtpByNameDelete) | **DELETE** /security/smtp/{name} | Delete SMTP Credential |
| [**securitySmtpByNameGet()**](SecurityApi.md#securitySmtpByNameGet) | **GET** /security/smtp/{name} | Load SMTP Credential |
| [**securitySmtpByNamePut()**](SecurityApi.md#securitySmtpByNamePut) | **PUT** /security/smtp/{name} | Update SMTP Credential |
| [**securitySmtpGet()**](SecurityApi.md#securitySmtpGet) | **GET** /security/smtp | List SMTP Credentials |
| [**securitySmtpPost()**](SecurityApi.md#securitySmtpPost) | **POST** /security/smtp | Add SMTP Credential |


## `securityApikeysByNameDelete()`

```php
securityApikeysByNameDelete($name, $subaccount)
```

Delete ApiKey

Delete your existing ApiKey. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the ApiKey
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which ApiKey should be deleted

try {
    $apiInstance->securityApikeysByNameDelete($name, $subaccount);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securityApikeysByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the ApiKey | |
| **subaccount** | **string**| Email of the subaccount of which ApiKey should be deleted | [optional] |

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

## `securityApikeysByNameGet()`

```php
securityApikeysByNameGet($name, $subaccount): \ElasticEmail\Model\ApiKey
```

Load ApiKey

Load your existing ApiKey info. Required Access Level: Security

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the ApiKey
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which ApiKey should be loaded

try {
    $result = $apiInstance->securityApikeysByNameGet($name, $subaccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securityApikeysByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the ApiKey | |
| **subaccount** | **string**| Email of the subaccount of which ApiKey should be loaded | [optional] |

### Return type

[**\ElasticEmail\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityApikeysByNamePut()`

```php
securityApikeysByNamePut($name, $api_key_payload): \ElasticEmail\Model\ApiKey
```

Update ApiKey

Update your existing ApiKey. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the ApiKey
$api_key_payload = new \ElasticEmail\Model\ApiKeyPayload(); // \ElasticEmail\Model\ApiKeyPayload

try {
    $result = $apiInstance->securityApikeysByNamePut($name, $api_key_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securityApikeysByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the ApiKey | |
| **api_key_payload** | [**\ElasticEmail\Model\ApiKeyPayload**](../Model/ApiKeyPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityApikeysGet()`

```php
securityApikeysGet($subaccount): \ElasticEmail\Model\ApiKey[]
```

List ApiKeys

List all your existing ApiKeys. Required Access Level: Security

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which ApiKeys should be loaded

try {
    $result = $apiInstance->securityApikeysGet($subaccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securityApikeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subaccount** | **string**| Email of the subaccount of which ApiKeys should be loaded | [optional] |

### Return type

[**\ElasticEmail\Model\ApiKey[]**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityApikeysPost()`

```php
securityApikeysPost($api_key_payload): \ElasticEmail\Model\NewApiKey
```

Add ApiKey

Add a new ApiKey. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_payload = new \ElasticEmail\Model\ApiKeyPayload(); // \ElasticEmail\Model\ApiKeyPayload

try {
    $result = $apiInstance->securityApikeysPost($api_key_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securityApikeysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_payload** | [**\ElasticEmail\Model\ApiKeyPayload**](../Model/ApiKeyPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\NewApiKey**](../Model/NewApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securitySmtpByNameDelete()`

```php
securitySmtpByNameDelete($name, $subaccount)
```

Delete SMTP Credential

Delete your existing SMTP Credentials. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the SMTP Credential
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which credential should be deleted

try {
    $apiInstance->securitySmtpByNameDelete($name, $subaccount);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securitySmtpByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the SMTP Credential | |
| **subaccount** | **string**| Email of the subaccount of which credential should be deleted | [optional] |

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

## `securitySmtpByNameGet()`

```php
securitySmtpByNameGet($name, $subaccount): \ElasticEmail\Model\SmtpCredentials
```

Load SMTP Credential

Load your existing SMTP Credential info. Required Access Level: Security

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the SMTP Credential
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which credential should be loaded

try {
    $result = $apiInstance->securitySmtpByNameGet($name, $subaccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securitySmtpByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the SMTP Credential | |
| **subaccount** | **string**| Email of the subaccount of which credential should be loaded | [optional] |

### Return type

[**\ElasticEmail\Model\SmtpCredentials**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securitySmtpByNamePut()`

```php
securitySmtpByNamePut($name, $smtp_credentials_payload): \ElasticEmail\Model\SmtpCredentials
```

Update SMTP Credential

Update your existing SMTP Credentials. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the SMTP Credential
$smtp_credentials_payload = new \ElasticEmail\Model\SmtpCredentialsPayload(); // \ElasticEmail\Model\SmtpCredentialsPayload

try {
    $result = $apiInstance->securitySmtpByNamePut($name, $smtp_credentials_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securitySmtpByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the SMTP Credential | |
| **smtp_credentials_payload** | [**\ElasticEmail\Model\SmtpCredentialsPayload**](../Model/SmtpCredentialsPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\SmtpCredentials**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securitySmtpGet()`

```php
securitySmtpGet($subaccount): \ElasticEmail\Model\SmtpCredentials[]
```

List SMTP Credentials

List all your existing SMTP Credentials. Required Access Level: Security

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subaccount = 'subaccount_example'; // string | Email of the subaccount of which credentials should be listed

try {
    $result = $apiInstance->securitySmtpGet($subaccount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securitySmtpGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subaccount** | **string**| Email of the subaccount of which credentials should be listed | [optional] |

### Return type

[**\ElasticEmail\Model\SmtpCredentials[]**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securitySmtpPost()`

```php
securitySmtpPost($smtp_credentials_payload): \ElasticEmail\Model\NewSmtpCredentials
```

Add SMTP Credential

Add new SMTP Credential. Required Access Level: ModifyAccessTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smtp_credentials_payload = new \ElasticEmail\Model\SmtpCredentialsPayload(); // \ElasticEmail\Model\SmtpCredentialsPayload

try {
    $result = $apiInstance->securitySmtpPost($smtp_credentials_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->securitySmtpPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **smtp_credentials_payload** | [**\ElasticEmail\Model\SmtpCredentialsPayload**](../Model/SmtpCredentialsPayload.md)|  | |

### Return type

[**\ElasticEmail\Model\NewSmtpCredentials**](../Model/NewSmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
