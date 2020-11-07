# LaraPress

[![Latest Version on Packagist](https://img.shields.io/packagist/v/outhebox/larapress.svg?style=flat-square)](https://packagist.org/packages/outhebox/larapress)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/outhebox/larapress/run-tests?label=tests)](https://github.com/outhebox/larapress/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/outhebox/larapress.svg?style=flat-square)](https://packagist.org/packages/outhebox/larapress)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require outhebox/larapress
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Outhebox\LaraPress\LaraPressServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Outhebox\LaraPress\LaraPressServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$larapress = new Outhebox\LaraPress();
echo $larapress->echoPhrase('Hello, Outhebox!');
```

## Testing

``` bash
composer test
```

## Road map

- [ ] Simplicity.
- [ ] Flexibility.
- [ ] Localization.
- [ ] Publishing Tools.
- [ ] Implement Gutenberg.
- [ ] User Management.
- [ ] Media Management.
- [ ] Built-in Comments.
- [ ] AMP Implementation.
- [ ] Multi-lingual content.
- [ ] Multi post format support.
- [ ] Extend with Plugins/Modules.
- [ ] Import Content From Other Platforms.
- [ ] Built-in Seo Plugin.
- [ ] Built-in Security Plugin.
- [ ] Built-in Cache Management Plugin.
- [ ] Search Engine Optimization.
- [ ] Google Webmaster Tools integration.
- [ ] Google analytics integration.
- [ ] Built-in Ads System.
- [ ] Built-in Analytics.
- [ ] Easy Theme System.
- [ ] Menus Management.
- [ ] Blocks/Widgets.
- [ ] Email Subscription & Send emails on new content.
- [ ] Built-in Api using GraphQl for better performance.
- [ ] Easy Installation and Upgrades.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohamed Ashraf](https://github.com/MohmmedAshraf)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
