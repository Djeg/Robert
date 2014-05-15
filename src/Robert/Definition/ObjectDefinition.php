<?php

namespace Robert\Definition;

use Robert\Definition\Definable;
use Robert\Utils\Typecaster;

/**
 * An object definition for a dictionary.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ObjectDefinition implements Definable
{
    /**
     * @var mixed $word
     */
    private $word;

    /**
     * @var Object $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = Typecaster::toObject($content);
    }

    /**
     * {@inheritdoc}
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->content;
    }
}
