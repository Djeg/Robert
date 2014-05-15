<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericDefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\NumericDefinition');
    }

    function it_is_a_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_a_numeric_content()
    {
        $this->beConstructedWith('test', '23,9');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn(23.9);
    }
}
