# php-confluence-client

This is the confluence rest resources endpoint documentation

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.1.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/adesso-mobile/php-confluence-client.git"
    }
  ],
  "require": {
    "adesso-mobile/php-confluence-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/php-confluence-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://localhost/rest/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfluenceApi* | [**getSpace**](docs/Api/ConfluenceApi.md#getspace) | **GET** /space/{spaceKey} | Returns information about a space.


## Documentation For Models

 - [ConfluenceSpaceError](docs/Model/ConfluenceSpaceError.md)
 - [ConfluenceSpaceExists](docs/Model/ConfluenceSpaceExists.md)


## Documentation For Authorization



## crowdAuth


- **Type**: HTTP basic authentication


## Author



