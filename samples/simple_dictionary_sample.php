<?php

require_once __DIR__.'/../vendor/autoload.php';

use Robert\Builder\DictionaryBuilder;
use Robert\Builder\DefinitionBuilder;

// Create a builder for your dictionary definitions
$definitionBuilder = new DefinitionBuilder;
// Create a builder for a dictionary that take a definition builder
$dictionaryBuilder = new DictionaryBuilder($definitionBuilder);

// Build the instance of \Robert\Dictionary
$dictionary = $dictionaryBuilder->build([
    'word one' => 'test',
    'word two' => 14,
    'word three' => 233.3,
    'word four' => ['some array'],
    'word five' => new \StdClass
]);

echo 'The dictionary :'."\n\n";

// You can loop on each dictionary \Robert\Definition\Definition
foreach ($dictionary as $definition) {
    // A \Robert\Definition\Definition contains a word and a content
    echo $definition->getWord() . ' : ' . print_r($definition->getContent(), true) . ' (' . get_class($definition) . ')'."\n";
}
