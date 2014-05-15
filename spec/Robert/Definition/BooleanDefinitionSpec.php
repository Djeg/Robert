<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BooleanDefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\BooleanDefinition');
    }

    function it_is_a_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_a_boolean_content()
    {
        $this->beConstructedWith('test', 'some string');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn(true);
    }
}
