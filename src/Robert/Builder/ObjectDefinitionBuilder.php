<?php

namespace Robert\Builder;

use Robert\Factory\ObjectDefinitionFactory;

/**
 * Build a object definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ObjectDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var ObjectDefinitionFactory $factory
     */
    private $factory;

    /**
     * @param ObjectDefinitionFactory $factory
     */
    public function __construct(ObjectDefinitionFactory $factory = null)
    {
        $this->factory = $factory ?: new ObjectDefinitionFactory;
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
        return is_array($content) || is_object($content);
    }
}
