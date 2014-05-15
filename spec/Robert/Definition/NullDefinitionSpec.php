<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NullDefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\NullDefinition');
    }

    function it_is_a_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_null_definition()
    {
        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn(null);
    }
}
