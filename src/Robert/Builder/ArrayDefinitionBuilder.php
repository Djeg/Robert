<?php

namespace Robert\Builder;

use Robert\Factory\ArrayDefinitionFactory;

/**
 * A arrat dictionary definition builder.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ArrayDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var ArrayDefinitionFactory $factory
     */
    private $factory;

    /**
     * @param ArrayDefinitionFactory $factory
     */
    public function __construct(ArrayDefinitionFactory $factory = null)
    {
        $this->factory = $factory = $factory ?: new ArrayDefinitionFactory;
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
        return is_array($content);
    }
}
