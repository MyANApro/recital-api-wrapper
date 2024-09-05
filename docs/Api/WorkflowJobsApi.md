# OpenAPI\Client\WorkflowJobsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost()**](WorkflowJobsApi.md#actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost) | **POST** /workflows/api/v1/jobs/{job_id}/action-callback | Action Callback |
| [**createJobWorkflowsApiV1JobsPost()**](WorkflowJobsApi.md#createJobWorkflowsApiV1JobsPost) | **POST** /workflows/api/v1/jobs/ | Create Job |
| [**downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet()**](WorkflowJobsApi.md#downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet) | **GET** /workflows/api/v1/jobs/{job_id}/files/{file_id} | Download Job File |
| [**downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet()**](WorkflowJobsApi.md#downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet) | **GET** /workflows/api/v1/jobs/{job_id}/files/download | Download Job Files |
| [**executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost()**](WorkflowJobsApi.md#executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost) | **POST** /workflows/api/v1/jobs/{job_id}/transitions/{transition_id}/execute | Execute Transition On Job |
| [**getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet()**](WorkflowJobsApi.md#getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet) | **GET** /workflows/api/v1/jobs/{job_id}/history/{entry_id} | Get Job History Entry |
| [**getJobWorkflowsApiV1JobsJobIdGet()**](WorkflowJobsApi.md#getJobWorkflowsApiV1JobsJobIdGet) | **GET** /workflows/api/v1/jobs/{job_id} | Get Job |
| [**listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet()**](WorkflowJobsApi.md#listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet) | **GET** /workflows/api/v1/jobs/{job_id}/transitions/ | List Available Transitions |
| [**listJobFilesWorkflowsApiV1JobsJobIdFilesGet()**](WorkflowJobsApi.md#listJobFilesWorkflowsApiV1JobsJobIdFilesGet) | **GET** /workflows/api/v1/jobs/{job_id}/files/ | List Job Files |
| [**listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet()**](WorkflowJobsApi.md#listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet) | **GET** /workflows/api/v1/jobs/{job_id}/history/ | List Job History |
| [**listJobsWorkflowsApiV1JobsGet()**](WorkflowJobsApi.md#listJobsWorkflowsApiV1JobsGet) | **GET** /workflows/api/v1/jobs/ | List Jobs |
| [**plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet()**](WorkflowJobsApi.md#plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet) | **GET** /workflows/api/v1/jobs/{job_id}/history/plot | Plot Job History |
| [**plotJobWorkflowsApiV1JobsJobIdPlotGet()**](WorkflowJobsApi.md#plotJobWorkflowsApiV1JobsJobIdPlotGet) | **GET** /workflows/api/v1/jobs/{job_id}/plot | Plot Job |
| [**startJobWorkflowsApiV1JobsJobIdStartPost()**](WorkflowJobsApi.md#startJobWorkflowsApiV1JobsJobIdStartPost) | **POST** /workflows/api/v1/jobs/{job_id}/start | Start Job |
| [**uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost()**](WorkflowJobsApi.md#uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost) | **POST** /workflows/api/v1/jobs/{job_id}/files/ | Upload Job Files |


## `actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost()`

```php
actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost($job_id, $entry_id): mixed
```

Action Callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$entry_id = 56; // int

try {
    $result = $apiInstance->actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost($job_id, $entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->actionCallbackWorkflowsApiV1JobsJobIdActionCallbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
| **entry_id** | **int**|  | |

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

## `createJobWorkflowsApiV1JobsPost()`

```php
createJobWorkflowsApiV1JobsPost($workflow_id, $workflow_uuid, $start, $custom_metadata, $is_test, $webhook_url, $webhook_token, $webhook_auth_type, $webhook_auth_header, $webhook_auth_param, $body): \OpenAPI\Client\Model\JobResponse
```

Create Job

This endpoint accepts both `application/json` and `form/multipart` requests.  ### `application/json` requests  In this mode, the endpoint uses the JSON payload as the job's initial data.  ### `form/multipart` requests  In this mode, the endpoint accepts at most one optional `application/json` part (or file) named `data` as the job's initial data.  Other parts (or files) are attached to the job in collections matching their part name; this mechanism is not limited to what is exposed in the Swagger schema.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$workflow_uuid = 'workflow_uuid_example'; // string
$start = true; // bool
$custom_metadata = 'custom_metadata_example'; // string
$is_test = false; // bool
$webhook_url = 'webhook_url_example'; // string | Webhook URL
$webhook_token = 'webhook_token_example'; // string | Webhook Authorization Token
$webhook_auth_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookAuthType(); // \OpenAPI\Client\Model\WebhookAuthType | Webhook Authorization Type
$webhook_auth_header = 'Authorization'; // string | Webhook Authorization Header Name (when type=header or type=bearer)
$webhook_auth_param = 'token'; // string | Webhook Authorization Parameter Name (when type=param)
$body = NULL; // mixed

try {
    $result = $apiInstance->createJobWorkflowsApiV1JobsPost($workflow_id, $workflow_uuid, $start, $custom_metadata, $is_test, $webhook_url, $webhook_token, $webhook_auth_type, $webhook_auth_header, $webhook_auth_param, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->createJobWorkflowsApiV1JobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | [optional] |
| **workflow_uuid** | **string**|  | [optional] |
| **start** | **bool**|  | [optional] [default to true] |
| **custom_metadata** | **string**|  | [optional] |
| **is_test** | **bool**|  | [optional] [default to false] |
| **webhook_url** | **string**| Webhook URL | [optional] |
| **webhook_token** | **string**| Webhook Authorization Token | [optional] |
| **webhook_auth_type** | [**\OpenAPI\Client\Model\WebhookAuthType**](../Model/.md)| Webhook Authorization Type | [optional] |
| **webhook_auth_header** | **string**| Webhook Authorization Header Name (when type&#x3D;header or type&#x3D;bearer) | [optional] [default to &#39;Authorization&#39;] |
| **webhook_auth_param** | **string**| Webhook Authorization Parameter Name (when type&#x3D;param) | [optional] [default to &#39;token&#39;] |
| **body** | **mixed**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet()`

```php
downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet($job_id, $file_id): mixed
```

Download Job File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$file_id = 56; // int

try {
    $result = $apiInstance->downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet($job_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->downloadJobFileWorkflowsApiV1JobsJobIdFilesFileIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
| **file_id** | **int**|  | |

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

## `downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet()`

```php
downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet($job_id): mixed
```

Download Job Files

Dowload all files related to a job in zip format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->downloadJobFilesWorkflowsApiV1JobsJobIdFilesDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

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

## `executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost()`

```php
executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost($job_id, $transition_id): mixed
```

Execute Transition On Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$transition_id = 56; // int

try {
    $result = $apiInstance->executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost($job_id, $transition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->executeTransitionOnJobWorkflowsApiV1JobsJobIdTransitionsTransitionIdExecutePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
| **transition_id** | **int**|  | |

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

## `getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet()`

```php
getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet($job_id, $entry_id): mixed
```

Get Job History Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$entry_id = 56; // int

try {
    $result = $apiInstance->getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet($job_id, $entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->getJobHistoryEntryWorkflowsApiV1JobsJobIdHistoryEntryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
| **entry_id** | **int**|  | |

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

## `getJobWorkflowsApiV1JobsJobIdGet()`

```php
getJobWorkflowsApiV1JobsJobIdGet($job_id): \OpenAPI\Client\Model\JobResponse
```

Get Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->getJobWorkflowsApiV1JobsJobIdGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->getJobWorkflowsApiV1JobsJobIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet()`

```php
listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet($job_id): \OpenAPI\Client\Model\TransitionResponse[]
```

List Available Transitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->listAvailableTransitionsWorkflowsApiV1JobsJobIdTransitionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

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

## `listJobFilesWorkflowsApiV1JobsJobIdFilesGet()`

```php
listJobFilesWorkflowsApiV1JobsJobIdFilesGet($job_id): \OpenAPI\Client\Model\JobFileResponse[]
```

List Job Files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->listJobFilesWorkflowsApiV1JobsJobIdFilesGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->listJobFilesWorkflowsApiV1JobsJobIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\JobFileResponse[]**](../Model/JobFileResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet()`

```php
listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet($job_id): \OpenAPI\Client\Model\JobEntry[]
```

List Job History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->listJobHistoryWorkflowsApiV1JobsJobIdHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\JobEntry[]**](../Model/JobEntry.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listJobsWorkflowsApiV1JobsGet()`

```php
listJobsWorkflowsApiV1JobsGet($workflow_id, $uuid, $workflow_filter, $step_filter, $states, $sort_desc, $limit, $offset): \OpenAPI\Client\Model\JobResponse[]
```

List Jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workflow_id = 56; // int
$uuid = 'uuid_example'; // string
$workflow_filter = 'workflow_filter_example'; // string
$step_filter = 'step_filter_example'; // string
$states = 'states_example'; // string
$sort_desc = True; // bool
$limit = 100; // int
$offset = 0; // int

try {
    $result = $apiInstance->listJobsWorkflowsApiV1JobsGet($workflow_id, $uuid, $workflow_filter, $step_filter, $states, $sort_desc, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->listJobsWorkflowsApiV1JobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workflow_id** | **int**|  | [optional] |
| **uuid** | **string**|  | [optional] |
| **workflow_filter** | **string**|  | [optional] |
| **step_filter** | **string**|  | [optional] |
| **states** | **string**|  | [optional] |
| **sort_desc** | **bool**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\OpenAPI\Client\Model\JobResponse[]**](../Model/JobResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet()`

```php
plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet($job_id, $direction, $format): mixed
```

Plot Job History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$direction = 'TB'; // string
$format = 'png'; // string

try {
    $result = $apiInstance->plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet($job_id, $direction, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->plotJobHistoryWorkflowsApiV1JobsJobIdHistoryPlotGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
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

## `plotJobWorkflowsApiV1JobsJobIdPlotGet()`

```php
plotJobWorkflowsApiV1JobsJobIdPlotGet($job_id, $direction, $format): mixed
```

Plot Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int
$direction = 'TB'; // string
$format = 'png'; // string

try {
    $result = $apiInstance->plotJobWorkflowsApiV1JobsJobIdPlotGet($job_id, $direction, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->plotJobWorkflowsApiV1JobsJobIdPlotGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |
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

## `startJobWorkflowsApiV1JobsJobIdStartPost()`

```php
startJobWorkflowsApiV1JobsJobIdStartPost($job_id): \OpenAPI\Client\Model\JobResponse
```

Start Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->startJobWorkflowsApiV1JobsJobIdStartPost($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->startJobWorkflowsApiV1JobsJobIdStartPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\JobResponse**](../Model/JobResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost()`

```php
uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost($job_id): \OpenAPI\Client\Model\JobFileResponse[]
```

Upload Job Files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: EnhancedOAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = 56; // int

try {
    $result = $apiInstance->uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowJobsApi->uploadJobFilesWorkflowsApiV1JobsJobIdFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\JobFileResponse[]**](../Model/JobFileResponse.md)

### Authorization

[EnhancedOAuth2PasswordBearer](../../README.md#EnhancedOAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
