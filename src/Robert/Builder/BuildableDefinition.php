<?php

namespace Robert\Builder;

/**
 * Defined the behavior of a definition builder
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
interface BuildableDefinition
{
    /**
     * Build a definition by given the word and it's contains
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @return Definable
     */
    public function build($word, $content);
}
