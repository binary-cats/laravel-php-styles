<?php

namespace BinaryCats\PhpStyles;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * @param \PhpCsFixer\Finder $finder
 * @param array              $rules
 * @param array              $fixers
 *
 * @return \PhpCsFixer\Config
 */
function styles(Finder $finder, array $rules = [], array $fixers = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return Config::create()
        ->registerCustomFixers($fixers)
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
