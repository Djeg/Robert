<?php

namespace Robert\Builder;

use Robert\Definition\Definition;

/**
 * Build a standard definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class DefinitionBuilder implements BuildableTypedDefinition
{
    /**
     * {@inheritdoc}
     */
    public function build($word, $content)
    {
        return new Definition($word, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function supports($word, $content)
    {
        return true;
    }
}
