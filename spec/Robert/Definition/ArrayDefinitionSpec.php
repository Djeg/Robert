<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayDefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test', 'test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\ArrayDefinition');
    }

    function it_is_a_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_an_array_content()
    {
        $this->beConstructedWith('test', 'some scalar');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn(['some scalar']);
    }

    function it_contains_an_empty_array_content_by_default()
    {
        $this->beConstructedWith('test');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn([]);
    }

    function it_does_not_cast_array_content_to_array()
    {
        $this->beConstructedWith('test', ['some array']);

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn(['some array']);
    }
}
