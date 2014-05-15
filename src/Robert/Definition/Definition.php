<?php

namespace Robert\Definition;

use Robert\Definition\Definable;

/**
 * A standard definition that accept any kind of data content.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class Definition implements Definable
{
    /**
     * @var mixed $word
     */
    private $word;

    /**
     * @var mixed $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = $content;
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
