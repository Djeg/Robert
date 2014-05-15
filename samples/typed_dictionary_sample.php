<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Robert\Builder\DictionaryBuilder;
use Robert\Builder\TypedDefinitionBuilder;
use Robert\Builder\NullDefinitionBuilder;
use Robert\Builder\ObjectDefinitionBuilder;
use Robert\Builder\BooleanDefinitionBuilder;
use Robert\Builder\NumericDefinitionBuilder;
use Robert\Builder\ScalarDefinitionBuilder;
use Robert\Builder\ArrayDefinitionBuilder;

// Create a TypedDefinitionBuilder that allow to create TypedDefinition
$definitionBuilder = new TypedDefinitionBuilder;

// Add some TypedDefinition in the definition builder :
$definitionBuilder->addTypedBuilder(new ScalarDefinitionBuilder);
$definitionBuilder->addTypedBuilder(new NumericDefinitionBuilder);
$definitionBuilder->addTypedBuilder(new BooleanDefinitionBuilder);
$definitionBuilder->addTypedBuilder(new ArrayDefinitionBuilder);
$definitionBuilder->addTypedBuilder(new ObjectDefinitionBuilder);
$definitionBuilder->addTypedBuilder(new NullDefinitionBuilder);

// Create a dictionary builder that takes a definition builder :
$dictionaryBuilder = new DictionaryBuilder($definitionBuilder);

// Build your dictionary instance :
$dictionary = $dictionaryBuilder->build([
    'word one' => 'some scalar',
    'word two' => [
        'A structure'
    ],
    'word three' => 234,
    'word four' => '2343,98',
    'word five' => null,
    'word six' => new StdClass,
    'word seven' => false,
    'word height' => '7264.32'
]);

echo 'The dictionary :'."\n\n";

// Loop on each definitions :
foreach ($dictionary as $definition) {
    // The definitions are typed correctly ^.^
    echo $definition->getWord().' : '. print_r($definition->getContent(), true). ' ('.get_class($definition).')'."\n";
}
