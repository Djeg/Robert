<?php

namespace spec\Robert;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Definition\Definable;

class DictionarySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Dictionary');
    }

    function it_is_a_dictionary()
    {
        $this->shouldHaveType('Robert\Dictionarisable');
    }

    function it_is_an_iterator()
    {
        $this->shouldHaveType('Iterator');
    }

    function it_iterate_over_the_definitions(Definable $definition1, Definable $definition2)
    {
        $this->addDefinition($definition1);
        $this->addDefinition($definition2);

        $this->current()->shouldReturn($definition1);
        $this->next();
        $this->current()->shouldReturn($definition2);
    }

    function it_can_not_iterate_if_it_is_empty()
    {
        $this->shouldThrow('Robert\Exception\EmptyDictionaryException')->duringCurrent();
    }

    function it_can_detect_if_it_is_empty()
    {
        $this->isEmpty()->shouldReturn(true);
    }

    function it_can_retrieve_existing_definition(Definable $definition)
    {
        $definition->getWord()->willReturn('test');

        $this->addDefinition($definition);

        $this->getDefinition('test')->shouldReturn($definition);
    }

    function it_fail_if_we_retrieve_an_non_existing_definition(Definable $definition)
    {
        $definition->getWord()->willReturn('test');

        $this->addDefinition($definition);

        $this->shouldThrow('Robert\Exception\DefinitionException')->duringGetDefinition('bad definition');
    }
}
