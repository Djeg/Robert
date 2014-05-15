<?php

namespace Robert\Factory;

use Robert\Definition\ObjectDefinition;

/**
 * @author David Jegat <david.jegat@gmail.com>
 */
class ObjectDefinitionFactory
{
    /**
     * Create an instance of a ObjectDefinition
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @return ObjectDefinition
     */
    public function create($word, $content)
    {
        return new ObjectDefinition($word, $content);
    }
}
