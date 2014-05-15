<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\Definition');
    }

    function it_is_a_corect_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_a_content()
    {
        $this->beConstructedWith('test', 'some content');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn('some content');
    }
}
