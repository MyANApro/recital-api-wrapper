# OpenAPI\Client\WorkflowsDefinitionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost()**](WorkflowsDefinitionApi.md#activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost) | **POST** /workflows/api/v1/workflows/{workflow_id}/activate | Activate A Workflow |
| [**createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost()**](WorkflowsDefinitionApi.md#createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost) | **POST** /workflows/api/v1/workflows/{workflow_id}/steps/ | Create Workflow Step |
| [**createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost()**](WorkflowsDefinitionApi.md#createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost) | **POST** /workflows/api/v1/workflows/{workflow_id}/transitions/ | Create Workflow Transition |
| [**createWorkflowWorkflowsApiV1WorkflowsPost()**](WorkflowsDefinitionApi.md#createWorkflowWorkflowsApiV1WorkflowsPost) | **POST** /workflows/api/v1/workflows/ | Create Workflow |
| [**deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete()**](WorkflowsDefinitionApi.md#deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete) | **DELETE** /workflows/api/v1/workflows/{workflow_id}/steps/{step_id} | Delete Workflow Step |
| [**deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete()**](WorkflowsDefinitionApi.md#deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete) | **DELETE** /workflows/api/v1/workflows/{workflow_id}/transitions/{transition_id} | Delete Workflow Transition |
| [**deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete()**](WorkflowsDefinitionApi.md#deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete) | **DELETE** /workflows/api/v1/workflows/{workflow_id} | Delete Workflow |
| [**exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet()**](WorkflowsDefinitionApi.md#exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet) | **GET** /workflows/api/v1/workflows/export/{workflow_id} | Export Workflow |
| [**forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost()**](WorkflowsDefinitionApi.md#forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost) | **POST** /workflows/api/v1/workflows/{workflow_id}/fork | Fork A Workflow |
| [**getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet()**](WorkflowsDefinitionApi.md#getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet) | **GET** /workflows/api/v1/workflows/{workflow_id}/steps/{step_id} | Get Workflow Step |
| [**getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet()**](WorkflowsDefinitionApi.md#getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet) | **GET** /workflows/api/v1/workflows/{workflow_id}/transitions/{transition_id} | Get Workflow Transition |
| [**importWorkflowWorkflowsApiV1WorkflowsImportPost()**](WorkflowsDefinitionApi.md#importWorkflowWorkflowsApiV1WorkflowsImportPost) | **POST** /workflows/api/v1/workflows/import | Import Workflow |
| [**listAllActionsWorkflowsApiV1WorkflowsActionsGet()**](WorkflowsDefinitionApi.md#listAllActionsWorkflowsApiV1WorkflowsActionsGet) | **GET** /workflows/api/v1/workflows/actions | List All Actions |
| [**listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet()**](WorkflowsDefinitionApi.md#listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet) | **GET** /workflows/api/v1/workflows/by-uuid | List All Workflows By Uuid |
| [**listAllWorkflowsWorkflowsApiV1WorkflowsGet()**](WorkflowsDefinitionApi.md#listAllWorkflowsWorkflowsApiV1WorkflowsGet) | **GET** /workflows/api/v1/workflows/ | List All Workflows |
| [**listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet()**](WorkflowsDefinitionApi.md#listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet) | **GET** /workflows/api/v1/workflows/{workflow_id}/steps/ | List Workflow Steps |
| [**listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet()**](WorkflowsDefinitionApi.md#listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet) | **GET** /workflows/api/v1/workflows/{workflow_id}/transitions/ | List Workflow Transitions |
| [**plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet()**](WorkflowsDefinitionApi.md#plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet) | **GET** /workflows/api/v1/workflows/{workflow_id}/plot | Plot Workflow |
| [**publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost()**](WorkflowsDefinitionApi.md#publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost) | **POST** /workflows/api/v1/workflows/{workflow_id}/publish | Publish A Workflow |
| [**retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet()**](WorkflowsDefinitionApi.md#retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet) | **GET** /workflows/api/v1/workflows/{workflow_id} | Retrieve Workflow |
| [**updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch()**](WorkflowsDefinitionApi.md#updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch) | **PATCH** /workflows/api/v1/workflows/{workflow_id}/steps/{step_id} | Update Workflow Step |
| [**updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch()**](WorkflowsDefinitionApi.md#updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch) | **PATCH** /workflows/api/v1/workflows/{workflow_id}/transitions/{transition_id} | Update Workflow Transitions |
| [**updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch()**](WorkflowsDefinitionApi.md#updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch) | **PATCH** /workflows/api/v1/workflows/{workflow_id} | Update Workflow |
| [**validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost()**](WorkflowsDefinitionApi.md#validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost) | **POST** /workflows/api/v1/workflows/{workflow_id}/validate | Validate A Workflow |


## `activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost()`

```php
activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost($workflow_id): mixed
```

Activate A Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->activateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdActivatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

**mixed**

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost()`

```php
createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost($workflow_id, $step_request): \OpenAPI\Client\Model\StepResponse
```

Create Workflow Step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$step_request = new \OpenAPI\Client\Model\StepRequest(); // \OpenAPI\Client\Model\StepRequest

try {
    $result = $apiInstance->createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost($workflow_id, $step_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->createWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **step_request** | [**\OpenAPI\Client\Model\StepRequest**](../Model/StepRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StepResponse**](../Model/StepResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost()`

```php
createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost($workflow_id, $transition_request): \OpenAPI\Client\Model\TransitionResponse
```

Create Workflow Transition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$transition_request = new \OpenAPI\Client\Model\TransitionRequest(); // \OpenAPI\Client\Model\TransitionRequest

try {
    $result = $apiInstance->createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost($workflow_id, $transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->createWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **transition_request** | [**\OpenAPI\Client\Model\TransitionRequest**](../Model/TransitionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransitionResponse**](../Model/TransitionResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkflowWorkflowsApiV1WorkflowsPost()`

```php
createWorkflowWorkflowsApiV1WorkflowsPost($workflow_request): \OpenAPI\Client\Model\WorkflowResponse
```

Create Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_request = new \OpenAPI\Client\Model\WorkflowRequest(); // \OpenAPI\Client\Model\WorkflowRequest

try {
    $result = $apiInstance->createWorkflowWorkflowsApiV1WorkflowsPost($workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->createWorkflowWorkflowsApiV1WorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_request** | [**\OpenAPI\Client\Model\WorkflowRequest**](../Model/WorkflowRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete()`

```php
deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete($step_id, $workflow_id)
```

Delete Workflow Step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$step_id = 56; // int
$workflow_id = 56; // int

try {
    $apiInstance->deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete($step_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->deleteWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **step_id** | **int**|  | |
| **workflow_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete()`

```php
deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete($transition_id, $workflow_id)
```

Delete Workflow Transition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int
$workflow_id = 56; // int

try {
    $apiInstance->deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete($transition_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->deleteWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**|  | |
| **workflow_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete()`

```php
deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete($workflow_id)
```

Delete Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $apiInstance->deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete($workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->deleteWorkflowWorkflowsApiV1WorkflowsWorkflowIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet()`

```php
exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet($workflow_id): mixed
```

Export Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->exportWorkflowWorkflowsApiV1WorkflowsExportWorkflowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

**mixed**

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost()`

```php
forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost($workflow_id): \OpenAPI\Client\Model\WorkflowResponse
```

Fork A Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->forkAWorkflowWorkflowsApiV1WorkflowsWorkflowIdForkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet()`

```php
getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet($workflow_id, $step_id): \OpenAPI\Client\Model\StepResponse
```

Get Workflow Step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$step_id = 56; // int

try {
    $result = $apiInstance->getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet($workflow_id, $step_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->getWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **step_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\StepResponse**](../Model/StepResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet()`

```php
getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet($transition_id, $workflow_id): \OpenAPI\Client\Model\TransitionResponse
```

Get Workflow Transition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int
$workflow_id = 56; // int

try {
    $result = $apiInstance->getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet($transition_id, $workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->getWorkflowTransitionWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**|  | |
| **workflow_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\TransitionResponse**](../Model/TransitionResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importWorkflowWorkflowsApiV1WorkflowsImportPost()`

```php
importWorkflowWorkflowsApiV1WorkflowsImportPost($workflow_file, $name): \OpenAPI\Client\Model\WorkflowResponse
```

Import Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_file = "/path/to/file.txt"; // \SplFileObject
$name = 'name_example'; // string

try {
    $result = $apiInstance->importWorkflowWorkflowsApiV1WorkflowsImportPost($workflow_file, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->importWorkflowWorkflowsApiV1WorkflowsImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_file** | **\SplFileObject****\SplFileObject**|  | |
| **name** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllActionsWorkflowsApiV1WorkflowsActionsGet()`

```php
listAllActionsWorkflowsApiV1WorkflowsActionsGet(): \OpenAPI\Client\Model\ActionResponse[]
```

List All Actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAllActionsWorkflowsApiV1WorkflowsActionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->listAllActionsWorkflowsApiV1WorkflowsActionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ActionResponse[]**](../Model/ActionResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet()`

```php
listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet($name, $uuid, $sort_desc, $limit, $offset): \OpenAPI\Client\Model\WorkflowByUUIDResponse[]
```

List All Workflows By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$uuid = 'uuid_example'; // string
$sort_desc = True; // bool
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet($name, $uuid, $sort_desc, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->listAllWorkflowsByUuidWorkflowsApiV1WorkflowsByUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
| **uuid** | **string**|  | [optional] |
| **sort_desc** | **bool**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\WorkflowByUUIDResponse[]**](../Model/WorkflowByUUIDResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllWorkflowsWorkflowsApiV1WorkflowsGet()`

```php
listAllWorkflowsWorkflowsApiV1WorkflowsGet($name, $uuid, $status, $limit, $offset): \OpenAPI\Client\Model\WorkflowResponse[]
```

List All Workflows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$uuid = 'uuid_example'; // string
$status = new \OpenAPI\Client\Model\WorkflowStatus(); // WorkflowStatus
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->listAllWorkflowsWorkflowsApiV1WorkflowsGet($name, $uuid, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->listAllWorkflowsWorkflowsApiV1WorkflowsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
| **uuid** | **string**|  | [optional] |
| **status** | [**WorkflowStatus**](../Model/.md)|  | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse[]**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet()`

```php
listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet($workflow_id, $action, $python): \OpenAPI\Client\Model\StepResponse[]
```

List Workflow Steps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$action = 'action_example'; // string
$python = false; // bool

try {
    $result = $apiInstance->listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet($workflow_id, $action, $python);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->listWorkflowStepsWorkflowsApiV1WorkflowsWorkflowIdStepsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **action** | **string**|  | [optional] |
| **python** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\StepResponse[]**](../Model/StepResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet()`

```php
listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet($workflow_id): \OpenAPI\Client\Model\TransitionResponse[]
```

List Workflow Transitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->listWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\TransitionResponse[]**](../Model/TransitionResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet()`

```php
plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet($workflow_id, $direction, $format): mixed
```

Plot Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$direction = 'TB'; // string
$format = 'png'; // string

try {
    $result = $apiInstance->plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet($workflow_id, $direction, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->plotWorkflowWorkflowsApiV1WorkflowsWorkflowIdPlotGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **direction** | **string**|  | [optional] [default to &#39;TB&#39;] |
| **format** | **string**|  | [optional] [default to &#39;png&#39;] |

### Return type

**mixed**

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost()`

```php
publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost($workflow_id): mixed
```

Publish A Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->publishAWorkflowWorkflowsApiV1WorkflowsWorkflowIdPublishPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

**mixed**

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet()`

```php
retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet($workflow_id): \OpenAPI\Client\Model\WorkflowResponse
```

Retrieve Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->retrieveWorkflowWorkflowsApiV1WorkflowsWorkflowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch()`

```php
updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch($step_id, $workflow_id, $step_partial_request): \OpenAPI\Client\Model\StepResponse
```

Update Workflow Step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$step_id = 56; // int
$workflow_id = 56; // int
$step_partial_request = new \OpenAPI\Client\Model\StepPartialRequest(); // \OpenAPI\Client\Model\StepPartialRequest

try {
    $result = $apiInstance->updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch($step_id, $workflow_id, $step_partial_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->updateWorkflowStepWorkflowsApiV1WorkflowsWorkflowIdStepsStepIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **step_id** | **int**|  | |
| **workflow_id** | **int**|  | |
| **step_partial_request** | [**\OpenAPI\Client\Model\StepPartialRequest**](../Model/StepPartialRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StepResponse**](../Model/StepResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch()`

```php
updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch($transition_id, $workflow_id, $transition_partial_request): \OpenAPI\Client\Model\TransitionResponse
```

Update Workflow Transitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transition_id = 56; // int
$workflow_id = 56; // int
$transition_partial_request = new \OpenAPI\Client\Model\TransitionPartialRequest(); // \OpenAPI\Client\Model\TransitionPartialRequest

try {
    $result = $apiInstance->updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch($transition_id, $workflow_id, $transition_partial_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->updateWorkflowTransitionsWorkflowsApiV1WorkflowsWorkflowIdTransitionsTransitionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transition_id** | **int**|  | |
| **workflow_id** | **int**|  | |
| **transition_partial_request** | [**\OpenAPI\Client\Model\TransitionPartialRequest**](../Model/TransitionPartialRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TransitionResponse**](../Model/TransitionResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch()`

```php
updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch($workflow_id, $workflow_partial_request): \OpenAPI\Client\Model\WorkflowResponse
```

Update Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$workflow_partial_request = new \OpenAPI\Client\Model\WorkflowPartialRequest(); // \OpenAPI\Client\Model\WorkflowPartialRequest

try {
    $result = $apiInstance->updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch($workflow_id, $workflow_partial_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->updateWorkflowWorkflowsApiV1WorkflowsWorkflowIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |
| **workflow_partial_request** | [**\OpenAPI\Client\Model\WorkflowPartialRequest**](../Model/WorkflowPartialRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponse**](../Model/WorkflowResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost()`

```php
validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost($workflow_id): \OpenAPI\Client\Model\WorkflowValidityResponse[]
```

Validate A Workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int

try {
    $result = $apiInstance->validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost($workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsDefinitionApi->validateAWorkflowWorkflowsApiV1WorkflowsWorkflowIdValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowValidityResponse[]**](../Model/WorkflowValidityResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
