<?php

namespace Robert\Builder;

use Robert\Factory\BooleanDefinitionFactory;

/**
 * Create a boolean definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class BooleanDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var BooleanDefinitionBuilder $factory
     */
    private $factory;

    /**
     * @param BooleanDefinitionFactory $factory
     */
    public function __construct(BooleanDefinitionFactory $factory = null)
    {
        $this->factory = $factory ?: new BooleanDefinitionFactory;
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
        return is_bool($content);
    }
}
