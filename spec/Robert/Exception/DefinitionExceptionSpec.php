<?php

namespace spec\Robert\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefinitionExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Exception\DefinitionException');
    }

    function it_is_an_exception()
    {
        $this->shouldHaveType('Exception');
    }
}
