<?php

namespace Robert\Builder;

use Robert\Exception\DefinitionBuilderException;

/**
 * Create a definition instance.
 *
 * @author David Jegat <david.jegat@gmail.com>
 */
class TypedDefinitionBuilder implements BuildableDefinition
{
    /**
     * @var BuildableTypedDefinition[] $typedBuilders
     */
    private $typedBuilders;

    public function __construct()
    {
        $this->typedBuilders = [];
    }

    /**
     * Create an instance of Definition
     *
     * @param mixed $word
     * @param mixed $content
     *
     * @throws DefinitionBuilderException if no typed builder supports the given
     * word and/or content.
     *
     * @return Definable
     */
    public function build($word, $content)
    {
        foreach ($this->typedBuilders as $typedBuilder) {
            if (!$typedBuilder->supports($word, $content)) {
                continue;
            }

            return $typedBuilder->build($word, $content);
        }

        throw new DefinitionBuilderException(sprintf(
            'The current definition of "%s" can not be resolved in a corect typed
            definition. The type "%s" is not a supported definition content.',
            $word,
            gettype($content)
        ));
    }

    /**
     * @param BuildableTypedDefinition $typedBuilder
     */
    public function addTypedBuilder(BuildableTypedDefinition $typedBuilder)
    {
        $this->typedBuilders[] = $typedBuilder;
    }
}
