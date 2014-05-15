<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Factory\NumericDefinitionFactory;
use Robert\Definition\NumericDefinition;

class NumericDefinitionBuilderSpec extends ObjectBehavior
{
    function let(NumericDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\NumericDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_supports_only_numeric_content()
    {
        $this->supports('test', 13)->shouldReturn(true);
        $this->supports('test', 13.5)->shouldReturn(true);
        $this->supports('test', '13.5')->shouldReturn(true);
        $this->supports('test', '13,5')->shouldReturn(true);
        $this->supports('test', '13')->shouldReturn(true);
        $this->supports('test', 'no numeric')->shouldReturn(false);
    }

    function it_build_a_numeric_definition($factory, NumericDefinition $definition)
    {
        $factory->create(Argument::cetera())->willReturn($definition);

        $this->build('test', 13)->shouldReturn($definition);
    }
}
