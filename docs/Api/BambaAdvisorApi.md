# Bamba\BambaAdvisorApi

All URIs are relative to https://sandbox.vivebamba.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**advisorMessagePost()**](BambaAdvisorApi.md#advisorMessagePost) | **POST** /advisor/message | Send messages to the Bamba Advisor


## `advisorMessagePost()`

```php
advisorMessagePost($advisorMessageRequest): \Bamba\Model\InlineResponse2001
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


$apiInstance = new Bamba\Api\BambaAdvisorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advisorMessageRequest = new \Bamba\Model\AdvisorMessageRequest(); // \Bamba\Model\AdvisorMessageRequest

try {
    $result = $apiInstance->advisorMessagePost($advisorMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BambaAdvisorApi->advisorMessagePost: ', $e->getMessage(), PHP_EOL;
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
