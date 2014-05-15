<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Builder\BuildableTypedDefinition;
use Robert\Definition\Definable;

class TypedDefinitionBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\TypedDefinitionBuilder');
    }

    function it_is_a_definition_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableDefinition');
    }

    function it_fail_if_no_typed_builder_support_the_definition()
    {
        $this->shouldThrow('Robert\Exception\DefinitionBuilderException')->duringBuild('test', 'some data');
    }

    function it_create_a_typed_definition_by_looping_on_the_typed_builder(
        BuildableTypedDefinition $builder1,
        BuildableTypedDefinition $builder2,
        Definable $definition
    )
    {
        $builder1->supports('test', 'some content')->shouldBeCalled()->willReturn(false);
        $builder1->build('test', 'some content')->shouldNotBeCalled();

        $builder2->supports('test', 'some content')->shouldBeCalled()->willReturn(true);
        $builder2->build('test', 'some content')->shouldBeCalled()->willReturn($definition);

        $this->addTypedBuilder($builder1);
        $this->addTypedBuilder($builder2);

        $this->build('test', 'some content')->shouldReturn($definition);
    }
}
