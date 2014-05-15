<?php

namespace Robert\Definition;

use Robert\Utils\Typecaster;

/**
 * A dictionary array definition
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ArrayDefinition implements Definable
{
    /**
     * @var mixed $word
     */
    private $word;

    /**
     * @var array $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = Typecaster::toArray($content);
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
