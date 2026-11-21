# sso
sso for accounts.engenesis.com

## Compatibility

- PHP 8.3+
- Laravel 13
- Guzzle 8.x
- Carbon 3.x

###
[![PHP Version Require](https://poser.pugx.org/engenesis/sso/require/php)](https://packagist.org/packages/engenesis/sso)
[![Total Downloads](https://poser.pugx.org/engenesis/sso/downloads)](https://packagist.org/packages/engenesis/sso)
[![License](https://poser.pugx.org/engenesis/sso/license)](https://packagist.org/packages/engenesis/sso)
[![GitHub All Releases](https://img.shields.io/github/downloads/ZamanLtd/Engenesis-SSO-pkg/total.svg)](https://github.com/ZamanLtd/Engenesis-SSO-pkg/releases)
## Installation

Run the following command to install the latest applicable version of the package:

```bash
    composer require engenesis/sso
```

## Setup:

add this lines to your .env file:

```ini
    ENGENESES_APP_ID=app_id
    ENGENESIS_APP_SECRET=app_secret
    ENGENESIS_APP_URL=app_url
```

publish config package:

```injectablephp
    php artisan vendor:publish --tag=zaman-tech-config
```

## Use:

```injectablephp
    use ZamanTech\Sso\Http\Controllers\SsoController;
    
    
    $sso = new SsoController('engenesis', $validated['code']);
    $content = $sso->getContent();
    $userDetails = $sso->getUserDetails();
    $userInfo = $sso->getUserInfo();
```

## License

Package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
