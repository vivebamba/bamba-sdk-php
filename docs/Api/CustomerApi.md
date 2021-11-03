# Bamba\CustomerApi

All URIs are relative to https://sandbox.vivebamba.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerIdServicesGet()**](CustomerApi.md#customerCustomerIdServicesGet) | **GET** /customer/{customerId}/services | Get customer services
[**customerCustomerIdServicesServiceIdCancelPut()**](CustomerApi.md#customerCustomerIdServicesServiceIdCancelPut) | **PUT** /customer/{customerId}/services/{serviceId}/cancel | Cancel customer services


## `customerCustomerIdServicesGet()`

```php
customerCustomerIdServicesGet($customerId): object[]
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
$customerId = d625aefa-73ba-4458-a107-5b3eea9f112b; // string | Bamba customer unique identifier

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
 **customerId** | **string**| Bamba customer unique identifier |

### Return type

**object[]**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCustomerIdServicesServiceIdCancelPut()`

```php
customerCustomerIdServicesServiceIdCancelPut($customerId, $serviceId): \Bamba\Model\CancellationResponse
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


$apiInstance = new Bamba\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = d625aefa-73ba-4458-a107-5b3eea9f112b; // string | The customer UUID assigned by Bamba
$serviceId = z625aefa-73ba-4458-a107-5b3eea9526a; // string | The service UUID to cancel assigned by Bamba

try {
    $result = $apiInstance->customerCustomerIdServicesServiceIdCancelPut($customerId, $serviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCustomerIdServicesServiceIdCancelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| The customer UUID assigned by Bamba |
 **serviceId** | **string**| The service UUID to cancel assigned by Bamba |

### Return type

[**\Bamba\Model\CancellationResponse**](../Model/CancellationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
