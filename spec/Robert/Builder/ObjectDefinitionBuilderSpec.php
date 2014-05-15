<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Factory\ObjectDefinitionFactory;
use Robert\Definition\ObjectDefinition;

class ObjectDefinitionBuilderSpec extends ObjectBehavior
{
    function let(ObjectDefinitionFactory $factory)
    {
        $this->beConstructedWith($factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\ObjectDefinitionBuilder');
    }

    function it_is_a_typed_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableTypedDefinition');
    }

    function it_supports_only_object_content()
    {
        $this->supports('test', 'some string')->shouldReturn(false);
        $this->supports('test', 13)->shouldReturn(false);
        $this->supports('test', ['test'])->shouldReturn(true);
        $this->supports('test', new \StdClass())->shouldReturn(true);
    }

    function it_build_a_object_definition($factory, ObjectDefinition $definition)
    {
        $factory->create('test', ['some content'])->shouldBeCalled()->willReturn($definition);

        $this->build('test', ['some content'])->shouldReturn($definition);
    }
}
