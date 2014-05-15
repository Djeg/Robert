<?php

namespace Robert\Definition;

/**
 * Handle a null definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class NullDefinition implements Definable
{
    /**
     * @var mixed $word
     */
    private $word;

    /**
     * @param mixed $word
     */
    public function __construct($word)
    {
        $this->word = $word;
    }

    /**
     * @return mixed
     */
    public function getWord()
    {
        return $this->word;
    }

    public function getContent()
    {
    }
}
