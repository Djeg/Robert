<?php

namespace Robert\Factory;

use Robert\Definition\NullDefinition;

/**
 * Can create instance of NullDefinition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class NullDefinitionFactory
{
    /**
     * Create a null definition.
     *
     * @param mixed $word
     *
     * @return NullDefinition
     */
    public function create($word)
    {
        return new NullDefinition($word);
    }
}
