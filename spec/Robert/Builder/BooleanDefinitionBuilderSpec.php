<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Definition\BooleanDefinition;
use Robert\Factory\BooleanDefinitionFactory;

class BooleanDefinitionBuilderSpec extends ObjectBehavior
{
    function let(BooleanDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\BooleanDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_only_supports_boolean()
    {
        $this->supports('test', 'plop')->shouldReturn(false);
        $this->supports('test', true)->shouldReturn(true);
    }

    function it_build_a_boolean_definition($factory, BooleanDefinition $definition)
    {
        $factory
            ->create('test', true)
            ->shouldBeCalled()
            ->willReturn($definition)
        ;

        $this->build('test', true)->shouldReturn($definition);
    }
}
