<?php

namespace Robert;

use Robert\Definition\Definable;

/**
 * This is the behavior of a Dictionary
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
interface Dictionarisable extends \Iterator
{
    /**
     * Retrieve the definition for a given word. If the word does
     * not exists please check the differents implementations of a
     * dictionary.
     *
     * @param string $word
     *
     * @return Definable, The definition for the word
     */
    public function getDefinition($word);

    /**
     * Test if this dictionary contains some definitions.
     *
     * @return boolean
     */
    public function isEmpty();

    /**
     * Add definition to this dictionary.
     *
     * @param Definable $definiton
     */
    public function addDefinition(Definable $definiton);

    /**
     * Test if this dictionary contains a definition for the given word.
     *
     * @param mixed $word
     *
     * @return boolean
     */
    public function hasDefinition($word);
}
