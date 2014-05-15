<?php

namespace Robert\Definition;

use Robert\Definition\Definable;
use Robert\Utils\Typecaster;

/**
 * A simple definition of a numeric value
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class NumericDefinition implements Definable
{
    /**
     * @var mixed $word
     */
    private $words;

    /**
     * @var numeric $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = Typecaster::toNumeric($content);
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
