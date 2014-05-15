<?php

namespace Robert\Builder;

use Robert\Factory\NumericDefinitionFactory;

/**
 * Create an instance of a numeric definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class NumericDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var NumericDefinitionFactory
     */
    private $factory;

    /**
     * @param NumericDefinitionFactory $factory
     */
    public function __construct(NumericDefinitionFactory $factory = null)
    {
        $this->factory = $factory ?: new NumericDefinitionFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function build($word, $content)
    {
        return $this->factory->create($word, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function supports($word, $content)
    {
        return is_numeric($content) || (is_string($content) && preg_match('/^[0-9,.]+$/', $content));
    }
}
