# IsignClientBundle
[![Build Status](https://travis-ci.org/isign/client-bundle.svg?branch=develop)](https://travis-ci.org/isign/client-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/isign/client-bundle/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/isign/client-bundle/?branch=develop)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/439ba6a8-7b23-453a-9553-0159e8623355/mini.png)](https://insight.sensiolabs.com/projects/439ba6a8-7b23-453a-9553-0159e8623355)

## Installation
### Installing via [Composer](https://getcomposer.org)
```bash
$ php composer.phar require isign/client-bundle
```

### Configuration
To use the bundle you have to define two parameters in your `app/config/config.yml` file under `isign_client` section
```yaml
# app/config/config.yml
isign_client:
    api_key: key
    sandbox: false
```

Where:
-   `api_key`: Your API access key. Don't have one? [Request](https://www.isign.io/contacts#request-access) API key.
-   `sandbox`: Sandbox mode on/off.

### Registering the Bundle
You have to add `IsignClientBundle` to your `AppKernel.php`:
```php
# app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ... other bundles
            new Isign\ClientBundle\IsignClientBundle()
        );

        return $bundles;
    }
}
```

## Usage
### Services
This bundle comes with following service which simplifies the
Isign implementation in your project:
```php
/** @type Isign\Client */
$client = $this->container->get('isign_client.service.client');
```
  
...to be continued...  

#### More usage examples available at official [Isign PHP client repository](https://github.com/isign/isign-sdk-php).

## Official API documentation can be found [here](https://developers.isign.io).
