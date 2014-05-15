<?php

namespace Robert\Definition;

use Robert\Definition\Definable;
use Robert\Utils\Typecaster;

/**
 * A boolean definition.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class BooleanDefinition implements Definable
{
    /**
     * @var mixed $word
     */
    private $word;

    /**
     * @var boolean $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = Typecaster::toBoolean($content);
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
