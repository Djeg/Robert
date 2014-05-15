<?php

namespace Robert\Factory;

use Robert\Dictionary;

/**
 * Create a dictionary instance.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class DictionaryFactory
{
    /**
     * @return Dictionary
     */
    public function create()
    {
        return new Dictionary();
    }
}
