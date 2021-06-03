# Bamba\CustomerApi

All URIs are relative to https://sandbox.vivebamba.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerIdServicesGet()**](CustomerApi.md#customerCustomerIdServicesGet) | **GET** /customer/{customerId}/services | Get customer services


## `customerCustomerIdServicesGet()`

```php
customerCustomerIdServicesGet($customerId): \Bamba\Model\Service
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


$apiInstance = new Bamba\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Bamba customer unique identifier

try {
    $result = $apiInstance->customerCustomerIdServicesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCustomerIdServicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Bamba customer unique identifier |

### Return type

[**\Bamba\Model\Service**](../Model/Service.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
