<?php

namespace Robert\Factory;

use Robert\Definition\ScalarDefinition;

/**
 * Create a scalar definition instance.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ScalarDefinitionFactory
{
    /**
     * @param mixed $word
     * @param mixed $content
     *
     * @return ScalarDefinition
     */
    public function create($word, $content)
    {
        return new ScalarDefinition($word, $content);
    }
}
