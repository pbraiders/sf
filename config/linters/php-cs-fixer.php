<?php

$finder = (new PhpCsFixer\Finder())
    ->in(dirname(__DIR__ . '/../..'))
    ->exclude('bin')
    ->exclude('config/linters')
    ->exclude('migrations')
    ->exclude('templates')
    ->exclude('translations')
    ->exclude('var')
    ->exclude('vendor');

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'concat_space' => ['spacing' => 'one'],
    ])
    ->setCacheFile('var/cache/.php-cs-fixer.cache')
    ->setFinder($finder);
