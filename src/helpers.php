<?php

namespace BinaryCats\PhpStyles;

use AdamWojs\PhpCsFixerPhpdocForceFQCN\Fixer\Phpdoc\ForceFQCNFixer;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * @param \PhpCsFixer\Finder $finder
 * @param array              $rules
 *
 * @return \PhpCsFixer\Config
 */
function styles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules, [
        'AdamWojs/phpdoc_force_fqcn_fixer' => true,
    ]);

    return Config::create()
        ->registerCustomFixers([
            new ForceFQCNFixer(),
        ])
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
