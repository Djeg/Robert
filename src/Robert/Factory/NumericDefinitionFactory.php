<?php

namespace Robert\Factory;

use Robert\Definition\NumericDefinition;

/**
 * @author David Jegat <david.jegat@gmail.com>
 */
class NumericDefinitionFactory
{
    /**
     * Create an instance of NumericDefinition
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @return NumericDefinition
     */
    public function create($word, $content)
    {
        return new NumericDefinition($word, $content);
    }
}
