<?php

namespace Robert\Builder;

use Robert\Factory\DictionaryFactory;

/**
 * Build a doctionary from an array.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class DictionaryBuilder implements BuildableDictionary
{
    /**
     * @var BuildableDefinition $definitionBuilder
     */
    private $definitionBuilder;

    /**
     * @var DictionaryFactory $dictionaryFactory;
     */
    private $dictionaryFactory;

    /**
     * @param DefinitionBuilder $definitionBuilder
     * @param DictionaryFactory $dictionaryFactory
     */
    public function __construct(BuildableDefinition $definitionBuilder, DictionaryFactory $dictionaryFactory = null)
    {
        $this->definitionBuilder = $definitionBuilder;
        $this->dictionaryFactory = $dictionaryFactory ?: new DictionaryFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function build($data)
    {
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                '%s::build must take an array, %s given.',
                get_class($this),
                gettype($data)
            ));
        }

        $dictionary = $this->dictionaryFactory->create();

        foreach ($data as $word => $content) {
            $definition = $this->definitionBuilder->build($word , $content);
            $dictionary->addDefinition($definition);
        }

        return $dictionary;
    }
}
