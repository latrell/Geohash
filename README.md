Geohash
======

This package geohash for Laravel4 support.

## Installation

```
composer require latrell/geohash dev-master
```

Update your packages with ```composer update``` or install with ```composer install```.

Find the `providers` key in `app/config/app.php` and register the Geohash Service Provider.

```php
    'providers' => array(
        // ...
        'Latrell\Geohash\GeohashServiceProvider',
    )
```

Find the aliases key in app/config/app.php.

```php
    'aliases' => array(
        // ...
        'Geohash' => 'Latrell\Geohash\Facades\Geohash',
    )
```

## Usage

Encode a coordinate:

```php
echo Geohash::encode(31.283131, 121.500831); // wtw3uyfjqw61
```

Decode a Geohash:

```php
list($lat, $lng) = Geohash::decode('wtw3uyfjqw61');
echo $lat, ', ', $lng; // 31.283131, 121.500831
```
