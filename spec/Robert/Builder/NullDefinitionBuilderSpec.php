<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Definition\NullDefinition;
use Robert\Factory\NullDefinitionFactory;

class NullDefinitionBuilderSpec extends ObjectBehavior
{
    function let(NullDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\NullDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_supports_only_null_content()
    {
        $this->supports('test', 'plop')->shouldReturn(false);
        $this->supports('test', null)->shouldReturn(true);
    }

    function it_build_a_null_definition($factory, NullDefinition $definition)
    {
        $factory
            ->create('test')
            ->shouldBeCalled()
            ->willReturn($definition)
        ;

        $this->build('test', null)->shouldReturn($definition);
    }
}
