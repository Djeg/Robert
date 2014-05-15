<?php

namespace Robert\Builder;

use Robert\Factory\NullDefinitionFactory;

/**
 * Build a null definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class NullDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var NullDefinitionFactory $factory
     */
    private $factory;

    /**
     * @param NullDefinitionFactory $factory
     */
    public function __construct(NullDefinitionFactory $factory = null)
    {
        $this->factory = $factory ?: new NullDefinitionFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function build($word, $content)
    {
        return $this->factory->create($word);
    }

    /**
     * {@inheritdoc}
     */
    public function supports($word, $content)
    {
        return is_null($content);
    }
}
