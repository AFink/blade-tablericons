# Blade Tablericons

A package to easily make use of [Tablericons](https://tablericons.com/) [GitHub](https://github.com/tabler/tabler-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](./resources/svg). Tablericons are originally developed by [Paweł Kuna](https://twitter.com/codecalm).

## Requirements

- PHP 7.2 or higher
- Laravel 7.14 or higher
- 
## Installation

You can install the package via composer:

```bash
composer require afink/blade-tablericons
```

## Usage
Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-tablericon-brand-github/>
```

You can also pass classes to your icon components:

```blade
<x-tablericon-brand-github class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-tablericon-brand-github style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-tablericons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-tablericons/brand-github.svg') }}" width="10" height="10"/>
```

### Tablericons

Blade tablericons uses Blade Icons under the hood. Please refer to [the Tablericons readme](https://github.com/tabler/tabler-icons) for additional functionality.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email andreas@andreasfink.xyz instead of using the issue tracker.

## Credits

-   [Andreas Fink](https://github.com/blade-tablericons)
-   [Faisal50x](https://github.com/Faisal50x/blade-ionicons) This package was inspired from him.
-   [blade-icons](https://github.com/blade-ui-kit/blade-icons)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
