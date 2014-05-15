<?php

namespace Robert\Factory;

use Robert\Definition\BooleanDefinition;

/**
 * @author David Jegat <david.jegat@gmail.com>
 */
class BooleanDefinitionFactory
{
    /**
     * Create an instance of a BooleanDefinition
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @return BooleanDefinition
     */
    public function create($word, $content)
    {
        return new BooleanDefinition($word, $content);
    }
}
