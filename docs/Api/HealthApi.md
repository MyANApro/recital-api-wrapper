# OpenAPI\Client\HealthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHealthWorkflowsApiV1HealthGet()**](HealthApi.md#getHealthWorkflowsApiV1HealthGet) | **GET** /workflows/api/v1/health/ | Get Health |


## `getHealthWorkflowsApiV1HealthGet()`

```php
getHealthWorkflowsApiV1HealthGet(): \OpenAPI\Client\Model\HealthResponse
```

Get Health

Get the overall health of the application based on the services it needs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHealthWorkflowsApiV1HealthGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealthWorkflowsApiV1HealthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
