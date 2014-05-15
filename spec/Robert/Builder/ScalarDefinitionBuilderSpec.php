<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Definition\ScalarDefinition;
use Robert\Factory\ScalarDefinitionFactory;

class ScalarDefinitionBuilderSpec extends ObjectBehavior
{
    function let(ScalarDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\ScalarDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_supports_only_string_that_does_not_contains_only_numerics()
    {
        $this->supports('test', 'some scalar')->shouldReturn(true);
        $this->supports('test', '3341.9')->shouldReturn(false);
        $this->supports('test', '232,3')->shouldReturn(false);
    }

    function it_build_a_scalar_definition($factory, ScalarDefinition $definition)
    {
        $factory->create('test', 'some content')->shouldBeCalled()->willReturn($definition);

        $this->build('test', 'some content')->shouldReturn($definition);
    }
}
