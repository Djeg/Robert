<?php

namespace spec\Robert\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DefinitionBuilderExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Exception\DefinitionBuilderException');
    }

    function it_is_an_exception()
    {
        $this->shouldHaveType('Exception');
    }
}
