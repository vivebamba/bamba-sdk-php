# bamba-sdk-php

SDK for Bamba API


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/vivebamba/bamba-sdk-php.git"
    }
  ],
  "require": {
    "vivebamba/bamba-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/bamba-sdk-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://sandbox.vivebamba.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BambaAdvisorApi* | [**advisorMessagePost**](docs/Api/BambaAdvisorApi.md#advisormessagepost) | **POST** /advisor/message | Send messages to the Bamba Advisor
*CustomerApi* | [**customerCustomerIdServicesGet**](docs/Api/CustomerApi.md#customercustomeridservicesget) | **GET** /customer/{customerId}/services | Get customer services
*CustomerApi* | [**customerCustomerIdServicesServiceIdCancelPut**](docs/Api/CustomerApi.md#customercustomeridservicesserviceidcancelput) | **PUT** /customer/{customerId}/services/{serviceId}/cancel | Cancel customer services
*StoreApi* | [**storeOrdersPost**](docs/Api/StoreApi.md#storeorderspost) | **POST** /store/orders | Place an order
*StoreApi* | [**storeProductsGet**](docs/Api/StoreApi.md#storeproductsget) | **GET** /store/products | Get products

## Models

- [AdvisorMessageRequest](docs/Model/AdvisorMessageRequest.md)
- [AdvisorUser](docs/Model/AdvisorUser.md)
- [CancellationResponse](docs/Model/CancellationResponse.md)
- [Customer](docs/Model/Customer.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse422](docs/Model/InlineResponse422.md)
- [InlineResponse4221](docs/Model/InlineResponse4221.md)
- [InlineResponse422Errors](docs/Model/InlineResponse422Errors.md)
- [Message](docs/Model/Message.md)
- [Order](docs/Model/Order.md)
- [OrderProducts](docs/Model/OrderProducts.md)
- [PaymentParams](docs/Model/PaymentParams.md)
- [Product](docs/Model/Product.md)
- [ProductDescription](docs/Model/ProductDescription.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

desarrollo@vivebamba.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.3`
    - Package version: `1.3.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
