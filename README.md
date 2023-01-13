# Chile Localized Providers for Faker

The provider includes a wide variety of data sets, including Chilean regions, provinces, and municipalities, as well as popular Chilean names, addresses, and phone numbers.

## Installation

You can install the package via composer:

```bash
composer require astersnake/faker-chile --dev
```


## Basic usage

```php
$faker = Faker\Factory::create('es_CL');
for ($i = 0; $i < 3; $i++) {
    echo $faker->rut() . "\n";
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [astersnake](https://github.com/astersnake)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
