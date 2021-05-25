# ElasticEmail\TemplatesApi

All URIs are relative to https://api.elasticemail.com/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**templatesByNameDelete()**](TemplatesApi.md#templatesByNameDelete) | **DELETE** /templates/{name} | Delete Template
[**templatesByNameGet()**](TemplatesApi.md#templatesByNameGet) | **GET** /templates/{name} | Load Template
[**templatesByNamePut()**](TemplatesApi.md#templatesByNamePut) | **PUT** /templates/{name} | Update Template
[**templatesGet()**](TemplatesApi.md#templatesGet) | **GET** /templates | Load Templates
[**templatesPost()**](TemplatesApi.md#templatesPost) | **POST** /templates | Add Template


## `templatesByNameDelete()`

```php
templatesByNameDelete($name)
```

Delete Template

Delete template with the specified name. Required Access Level: ModifyTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Template01; // string | Name of template.

try {
    $apiInstance->templatesByNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesByNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |

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

## `templatesByNameGet()`

```php
templatesByNameGet($name): Template
```

Load Template

Load detailed information of the specified template. Required Access Level: ViewTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Template01; // string | Name of template.

try {
    $result = $apiInstance->templatesByNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesByNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |

### Return type

[**Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesByNamePut()`

```php
templatesByNamePut($name, $template_payload): \ElasticEmail\Model\Template
```

Update Template

Update existing template, overwriting existing data. Required Access Level: ModifyTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Template01; // string | Name of template.
$template_payload = new \ElasticEmail\Model\TemplatePayload(); // \ElasticEmail\Model\TemplatePayload

try {
    $result = $apiInstance->templatesByNamePut($name, $template_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesByNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |
 **template_payload** | [**\ElasticEmail\Model\TemplatePayload**](../Model/TemplatePayload.md)|  |

### Return type

[**\ElasticEmail\Model\Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesGet()`

```php
templatesGet($scope_type, $template_types, $limit, $offset): \ElasticEmail\Model\Template[]
```

Load Templates

Returns a list of templates for the specified type. Required Access Level: ViewTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scope_type = array(new \ElasticEmail\Model\\ElasticEmail\Model\TemplateScope()); // \ElasticEmail\Model\TemplateScope[] | Return templates with specified scope only
$template_types = array(new \ElasticEmail\Model\\ElasticEmail\Model\TemplateType()); // \ElasticEmail\Model\TemplateType[] | Return templates with specified type only
$limit = 100; // int | Maximum number of returned items.
$offset = 20; // int | How many items should be returned ahead.

try {
    $result = $apiInstance->templatesGet($scope_type, $template_types, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope_type** | [**\ElasticEmail\Model\TemplateScope[]**](../Model/\ElasticEmail\Model\TemplateScope.md)| Return templates with specified scope only |
 **template_types** | [**\ElasticEmail\Model\TemplateType[]**](../Model/\ElasticEmail\Model\TemplateType.md)| Return templates with specified type only | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**\ElasticEmail\Model\Template[]**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesPost()`

```php
templatesPost($template_payload): Template
```

Add Template

Add a new Template. Required Access Level: ModifyTemplates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKey('X-ElasticEmail-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ElasticEmail\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ElasticEmail-ApiKey', 'Bearer');


$apiInstance = new ElasticEmail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_payload = new \ElasticEmail\Model\TemplatePayload(); // \ElasticEmail\Model\TemplatePayload

try {
    $result = $apiInstance->templatesPost($template_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_payload** | [**\ElasticEmail\Model\TemplatePayload**](../Model/TemplatePayload.md)|  |

### Return type

[**Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
