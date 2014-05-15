<?php

namespace Robert\Builder;

/**
 * Defined the behavior of a typed definition builder.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
interface BuildableTypedDefinition extends BuildableDefinition
{
    /**
     * Test if the word and teh content are upported by this typed definition builder.
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @return boolean
     */
    public function supports($word, $content);
}
