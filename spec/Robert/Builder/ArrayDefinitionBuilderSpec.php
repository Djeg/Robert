<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Factory\ArrayDefinitionFactory;
use Robert\Definition\ArrayDefinition;

class ArrayDefinitionBuilderSpec extends ObjectBehavior
{
    function let(ArrayDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\ArrayDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_only_supports_array_content()
    {
        $this->supports('test', ['plop'])->shouldReturn(true);
        $this->supports('test', 'plop')->shouldReturn(false);
    }

    function it_build_an_array_definition($factory, ArrayDefinition $definition)
    {
        $factory->create('test', ['plop'])->shouldBeCalled()->willReturn($definition);

        $this->build('test', ['plop'])->shouldReturn($definition);
    }
}
