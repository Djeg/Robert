<?php

namespace Robert\Factory;

use Robert\Definition\ArrayDefinition;

/**
 * Create an array definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ArrayDefinitionFactory
{
    /**
     * @param mixed $word
     * @param mixed $content
     *
     * @return ArrayDefinition
     */
    public function create($word, $content = null)
    {
        return new ArrayDefinition($word, $content);
    }
}
