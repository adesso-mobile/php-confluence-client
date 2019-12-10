# ConfluenceClient\ConfluenceApi

All URIs are relative to *http://localhost/rest/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPageById**](ConfluenceApi.md#getPageById) | **GET** /content/{pageId} | Gets a confluence page content by id.
[**getSpace**](ConfluenceApi.md#getSpace) | **GET** /space/{spaceKey} | Returns information about a space.



## getPageById

> \ConfluenceClient\Model\ConfluencePageRepresentation getPageById($page_id)

Gets a confluence page content by id.

Returns a piece of Content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: crowdAuth
$config = ConfluenceClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ConfluenceClient\Api\ConfluenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 56; // int | The page ID to return information about the page.

try {
    $result = $apiInstance->getPageById($page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfluenceApi->getPageById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_id** | **int**| The page ID to return information about the page. |

### Return type

[**\ConfluenceClient\Model\ConfluencePageRepresentation**](../Model/ConfluencePageRepresentation.md)

### Authorization

[crowdAuth](../../README.md#crowdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSpace

> \ConfluenceClient\Model\ConfluenceSpaceExists getSpace($space_key, $expand)

Returns information about a space.

Returns information about a space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: crowdAuth
$config = ConfluenceClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new ConfluenceClient\Api\ConfluenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_key = 'space_key_example'; // string | The space key to return information about the space
$expand = 'expand_example'; // string | a comma separated list of properties to expand on the space

try {
    $result = $apiInstance->getSpace($space_key, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfluenceApi->getSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **space_key** | **string**| The space key to return information about the space |
 **expand** | **string**| a comma separated list of properties to expand on the space | [optional]

### Return type

[**\ConfluenceClient\Model\ConfluenceSpaceExists**](../Model/ConfluenceSpaceExists.md)

### Authorization

[crowdAuth](../../README.md#crowdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

