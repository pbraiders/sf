<?php

$finder = (new PhpCsFixer\Finder())
    ->in(dirname(__DIR__ . '..'))
    ->exclude('bin')
    ->exclude('linters')
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
    ->setFinder($finder);
