# Bamba\V1Api

All URIs are relative to https://sandbox.vivebamba.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AdvisorMessagePost()**](V1Api.md#v1AdvisorMessagePost) | **POST** /v1/advisor/message | Send messages to the Bamba Advisor
[**v1CustomerCustomerIdServicesGet()**](V1Api.md#v1CustomerCustomerIdServicesGet) | **GET** /v1/customer/{customerId}/services | Get customer services
[**v1CustomerCustomerIdServicesSkuCancelPut()**](V1Api.md#v1CustomerCustomerIdServicesSkuCancelPut) | **PUT** /v1/customer/{customerId}/services/{sku}/cancel | Cancel customer services
[**v1StoreOrdersPost()**](V1Api.md#v1StoreOrdersPost) | **POST** /v1/store/orders | Place an order
[**v1StoreProductsGet()**](V1Api.md#v1StoreProductsGet) | **GET** /v1/store/products | Get products


## `v1AdvisorMessagePost()`

```php
v1AdvisorMessagePost($advisorMessageRequest): \Bamba\Model\InlineResponse2001
```

Send messages to the Bamba Advisor

Send mesages to the Bamba Advisor from new or existing customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Bamba\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bamba\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Bamba\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advisorMessageRequest = new \Bamba\Model\AdvisorMessageRequest(); // \Bamba\Model\AdvisorMessageRequest

try {
    $result = $apiInstance->v1AdvisorMessagePost($advisorMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->v1AdvisorMessagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advisorMessageRequest** | [**\Bamba\Model\AdvisorMessageRequest**](../Model/AdvisorMessageRequest.md)|  | [optional]

### Return type

[**\Bamba\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CustomerCustomerIdServicesGet()`

```php
v1CustomerCustomerIdServicesGet($customerId): \Bamba\Model\Subscription
```

Get customer services

Get all customer services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Bamba\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bamba\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Bamba\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Bamba customer unique identifier

try {
    $result = $apiInstance->v1CustomerCustomerIdServicesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->v1CustomerCustomerIdServicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Bamba customer unique identifier |

### Return type

[**\Bamba\Model\Subscription**](../Model/Subscription.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1CustomerCustomerIdServicesSkuCancelPut()`

```php
v1CustomerCustomerIdServicesSkuCancelPut($customerId, $sku): \Bamba\Model\Subscription
```

Cancel customer services

Cancel customer services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Bamba\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bamba\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Bamba\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Bamba customer unique identifier
$sku = 'sku_example'; // string | Service sku

try {
    $result = $apiInstance->v1CustomerCustomerIdServicesSkuCancelPut($customerId, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->v1CustomerCustomerIdServicesSkuCancelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Bamba customer unique identifier |
 **sku** | **string**| Service sku |

### Return type

[**\Bamba\Model\Subscription**](../Model/Subscription.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1StoreOrdersPost()`

```php
v1StoreOrdersPost($order): \Bamba\Model\InlineResponse200
```

Place an order

Place an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Bamba\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bamba\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Bamba\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \Bamba\Model\Order(); // \Bamba\Model\Order

try {
    $result = $apiInstance->v1StoreOrdersPost($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->v1StoreOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Bamba\Model\Order**](../Model/Order.md)|  | [optional]

### Return type

[**\Bamba\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1StoreProductsGet()`

```php
v1StoreProductsGet(): \Bamba\Model\Product[]
```

Get products

Retrieve all products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Bamba\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bamba\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Bamba\Api\V1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1StoreProductsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1Api->v1StoreProductsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bamba\Model\Product[]**](../Model/Product.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
