# Bamba\StoreApi

All URIs are relative to https://sandbox.vivebamba.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1StoreOrdersPost()**](StoreApi.md#v1StoreOrdersPost) | **POST** /v1/store/orders | Place an order
[**v1StoreProductsGet()**](StoreApi.md#v1StoreProductsGet) | **GET** /v1/store/products | Get products


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


$apiInstance = new Bamba\Api\StoreApi(
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
    echo 'Exception when calling StoreApi->v1StoreOrdersPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Bamba\Api\StoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1StoreProductsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->v1StoreProductsGet: ', $e->getMessage(), PHP_EOL;
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
