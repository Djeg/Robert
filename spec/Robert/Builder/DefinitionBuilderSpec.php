<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Definition\Definition;

class DefinitionBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\DefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_supports_everything()
    {
        $mockData = [
            'something',
            132,
            2343.34,
            false,
            null,
            new \StdCLass,
            ['some array']
        ];

        foreach ($mockData as $content) {
            $this->supports('something', $content)->shouldReturn(true);
        }
    }

    function it_build_a_definition()
    {
        $definition = new Definition('test', 'test');

        $this->build('test', 'test')->shouldBeTheSameDefinition($definition);
    }

    function getMatchers()
    {
        return [
            'beTheSameDefinition' => function ($subject, $definition) {
                if (!$subject instanceof Definition) {
                    return false;
                }

                if ($subject->getWord() !== $definition->getWord()) {
                    return false;
                }

                if ($subject->getContent() !== $definition->getContent()) {
                    return false;
                }

                return true;
            }
        ];
    }
}
