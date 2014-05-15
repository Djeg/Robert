<?php

namespace Robert\Definition;

/**
 * The definition of a dictionary
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
interface Definable
{
    /**
     * Return the word of the definition
     *
     * @return mixed
     */
    public function getWord();

    /**
     * Return the definition content.
     *
     * @return mixed
     */
    public function getContent();
}
