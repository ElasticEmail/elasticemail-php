# ElasticEmail\DomainsApi

All URIs are relative to https://api.elasticemail.com/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsByDomainDelete()**](DomainsApi.md#domainsByDomainDelete) | **DELETE** /domains/{domain} | Delete Domain |
| [**domainsByDomainGet()**](DomainsApi.md#domainsByDomainGet) | **GET** /domains/{domain} | Load Domain |
| [**domainsByDomainPut()**](DomainsApi.md#domainsByDomainPut) | **PUT** /domains/{domain} | Update Domain |
| [**domainsByDomainRestrictedGet()**](DomainsApi.md#domainsByDomainRestrictedGet) | **GET** /domains/{domain}/restricted | Check for domain restriction |
| [**domainsByDomainVerificationPut()**](DomainsApi.md#domainsByDomainVerificationPut) | **PUT** /domains/{domain}/verification | Verify Domain |
| [**domainsByEmailDefaultPatch()**](DomainsApi.md#domainsByEmailDefaultPatch) | **PATCH** /domains/{email}/default | Set Default |
| [**domainsGet()**](DomainsApi.md#domainsGet) | **GET** /domains | Load Domains |
| [**domainsPost()**](DomainsApi.md#domainsPost) | **POST** /domains | Add Domain |


## `domainsByDomainDelete()`

```php
domainsByDomainDelete($domain)
```

Delete Domain

Deletes configured domain from Account. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Name of the given domain

try {
    $apiInstance->domainsByDomainDelete($domain);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByDomainDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Name of the given domain | |

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

## `domainsByDomainGet()`

```php
domainsByDomainGet($domain): \ElasticEmail\Model\DomainData
```

Load Domain

Retrieve a domain configured for this Account. Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Name of the given domain

try {
    $result = $apiInstance->domainsByDomainGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByDomainGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Name of the given domain | |

### Return type

[**\ElasticEmail\Model\DomainData**](../Model/DomainData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsByDomainPut()`

```php
domainsByDomainPut($domain, $domain_update_payload): \ElasticEmail\Model\DomainDetail
```

Update Domain

Updates the specified domain. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Name of the given domain
$domain_update_payload = new \ElasticEmail\Model\DomainUpdatePayload(); // \ElasticEmail\Model\DomainUpdatePayload | Updated Domain resource

try {
    $result = $apiInstance->domainsByDomainPut($domain, $domain_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByDomainPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Name of the given domain | |
| **domain_update_payload** | [**\ElasticEmail\Model\DomainUpdatePayload**](../Model/DomainUpdatePayload.md)| Updated Domain resource | |

### Return type

[**\ElasticEmail\Model\DomainDetail**](../Model/DomainDetail.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsByDomainRestrictedGet()`

```php
domainsByDomainRestrictedGet($domain): bool
```

Check for domain restriction

Checking if domain is from free provider, or restricted. Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Name of the given domain

try {
    $result = $apiInstance->domainsByDomainRestrictedGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByDomainRestrictedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Name of the given domain | |

### Return type

**bool**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsByDomainVerificationPut()`

```php
domainsByDomainVerificationPut($domain, $body): \ElasticEmail\Model\DomainData
```

Verify Domain

Verifies that required DNS records exist for specified domain. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | Name of the given domain
$body = 'body_example'; // string | Tracking type used in the Tracking verification

try {
    $result = $apiInstance->domainsByDomainVerificationPut($domain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByDomainVerificationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Name of the given domain | |
| **body** | **string**| Tracking type used in the Tracking verification | |

### Return type

[**\ElasticEmail\Model\DomainData**](../Model/DomainData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsByEmailDefaultPatch()`

```php
domainsByEmailDefaultPatch($email): \ElasticEmail\Model\DomainDetail
```

Set Default

Sets a verified email address as default sender. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Default email sender, example: mail@yourdomain.com

try {
    $result = $apiInstance->domainsByEmailDefaultPatch($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsByEmailDefaultPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Default email sender, example: mail@yourdomain.com | |

### Return type

[**\ElasticEmail\Model\DomainDetail**](../Model/DomainDetail.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsGet()`

```php
domainsGet(): \ElasticEmail\Model\DomainDetail[]
```

Load Domains

Returns a list of all domains configured for this Account. Required Access Level: ViewSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ElasticEmail\Model\DomainDetail[]**](../Model/DomainDetail.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsPost()`

```php
domainsPost($domain_payload): \ElasticEmail\Model\DomainDetail
```

Add Domain

Add new domain to Account. Required Access Level: ModifySettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_payload = new \ElasticEmail\Model\DomainPayload(); // \ElasticEmail\Model\DomainPayload | Domain to add

try {
    $result = $apiInstance->domainsPost($domain_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_payload** | [**\ElasticEmail\Model\DomainPayload**](../Model/DomainPayload.md)| Domain to add | |

### Return type

[**\ElasticEmail\Model\DomainDetail**](../Model/DomainDetail.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
