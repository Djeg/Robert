<?php

namespace Robert;

use Robert\Exception\EmptyDictionaryException;
use Robert\Exception\DefinitionException;
use Robert\Definition\Definable;

/**
 * A standard pocket dictionary. Like it's name says, this dictionary
 * must contains litlle piece of data.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class Dictionary implements Dictionarisable
{
    /**
     * @var integer $offset
     */
    private $offset;

    /**
     * @var Definable[] $definitions
     */
    private $definitions;

    /**
     * @param array $data
     */
    public function __construct()
    {
        $this->definitions = [];
        $this->offset      = 0;
    }

    /**
     * Return the current offset
     *
     * @see \Iterator::current
     *
     * @throws EmptyDictionaryException
     *
     * @return mixed
     */
    public function current()
    {
        if ($this->isEmpty()) {
            throw new EmptyDictionaryException('You\'re asking the current element of an empty dictionary');
        }

        return $this->definitions[$this->offset];
    }

    /**
     * Return the dictionary current offset
     *
     * @see \Iterator::current
     *
     * @throws EmptyDictionaryException
     *
     * @return integer
     */
    public function key()
    {
        if ($this->isEmpty()) {
            throw new EmptyDictionaryException('You\'re asking the current key of an empty dictionary');
        }

        return $this->offset;
    }

    /**
     * Iterate to the next offset
     *
     * @see \Iterator::current
     */
    public function next()
    {
        $this->offset++;
    }

    /**
     * Reset the offset
     *
     * @see \Iterator::rewind
     */
    public function rewind()
    {
        $this->offset = 0;
    }

    /**
     * Test if the current offset is valid
     *
     * @see \Iterator::valid
     */
    public function valid()
    {
        return isset($this->definitions[$this->offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        return empty($this->definitions);
    }

    /**
     * {@inheritdoc}
     */
    public function addDefinition(Definable $definition)
    {
        $this->definitions[] = $definition;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefinition($word)
    {
        if (!$this->hasDefinition($word)) {
            throw new DefinitionException(sprintf(
                'The definition of "%s" does not exists in this dictionary',
                $word
            ));
        }

        foreach ($this->definitions as $definition) {
            if ($definition->getWord() === $word) {
                return $definition;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDefinition($word)
    {
        foreach ($this->definitions as $definition) {
            if ($definition->getWord() === $word) {
                return true;
            }
        }

        return false;
    }
}
