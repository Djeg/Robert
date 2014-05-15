<?php

namespace Robert\Definition;

use Robert\Definition\Definable;
use Robert\Utils\Typecaster;

/**
 * A simple scalar definition
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class ScalarDefinition implements Definable
{
    /**
     * @var mixed $word, the definition offset
     */
    private $word;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @param mixed $word
     * @param mixed $content
     */
    public function __construct($word, $content = null)
    {
        $this->word    = $word;
        $this->content = Typecaster::toScalar($content);
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
