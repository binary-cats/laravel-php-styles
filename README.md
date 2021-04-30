# PHP Styles

Set of shared PHP styles for PHP-CS-Fixer, based on Symphony (PRS12, PSR2) PHP Coding standard.

## Installation

via Composer:

```bash
composer require binary-cats/laravel-php-styles --dev
```

It will add the package to the `require-dev` block of your `composer.json`.

You can also add it manually, like this, to get the latest version:

```json
    "require-dev": {
        "binary-cats/laravel-php-styles": "^1.0"
    },
```

## Laravel

You can publish the stub file using
```bash
php artisan vendor:publish --provider=BinaryCats\\PhpStyles\\PhpStylesServiceProvider
```

You should also add `.php_cs.cache` to your `.gitignore`.

## Config

The package provides with the current set of [rules](./src/rules.php):

```php
return [
    '@Symfony' => true,
    'AdamWojs/phpdoc_force_fqcn_fixer' => true,
    'array_syntax' => ['syntax' => 'short'],
    'concat_space' => ['spacing' => 'one'],
    'final_class' => false,
    'new_with_braces' => true,
    'no_superfluous_phpdoc_tags' => false,
    'not_operator_with_successor_space' => true,
    'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'],
    'phpdoc_separation' => false,
];
```

## Integration

PHP-CS-Fixer is going to expect your configuration to be in a `/.php_cs.dist` file.

```php
<?php

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__.'/app',
    __DIR__.'/config',
    __DIR__.'/database',
    __DIR__.'/routes',
    __DIR__.'/tests',
]);

return BinaryCats\PhpStyles\styles($finder);
```

## Usage

And now you can run the fix like this:
```bash
./vendor/bin/php-cs-fixer fix
```

If you want to see the progress as you go by:
```bash
./vendor/bin/php-cs-fixer fix --verbose --show-progress=estimate
```

If you want to add this to composer alias, you can add this to your `composer.json`:
```json
    ...
    "scripts": {
        "style": "./vendor/bin/php-cs-fixer fix"
    }
```

## Advanced Use

If you want to change the rules, disable, or add your own, simply update `.php_cs.dist` in your project's root:

```php
return BinaryCats\PhpStyles\styles($finder, [
    // turn the force FQCN fixer off
    'AdamWojs/phpdoc_force_fqcn_fixer' => false,
    // Do not wrap concat . with spaces
    'concat_space' => ['spacing' => 'none'],
]);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@binarycats.io instead of using the issue tracker.

## Credits

- [Cyrill N Kalita][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/cyrill.kalita
[link-contributors]: ../../contributors
