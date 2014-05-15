<?php

namespace Robert\Builder;

use Robert\Factory\ScalarDefinitionFactory;

/**
 * Build a ScalarDefinition instance.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ScalarDefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * @var ScalarDefinitionFactory $factory
     */
    private $factory;

    /**
     * @param ScalarDefinitionFactory $factory
     */
    public function __construct(ScalarDefinitionFactory $factory = null)
    {
        $this->factory = $factory ?: new ScalarDefinitionFactory;
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
        return is_string($content) && !preg_match('/^[0-9,.]+$/', $content);
    }
}
