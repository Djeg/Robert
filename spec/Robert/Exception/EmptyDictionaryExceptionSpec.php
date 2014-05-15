<?php

namespace spec\Robert\Exception;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmptyDictionaryExceptionSpec extends ObjectBehavior
{
    function it_is_an_exception()
    {
        $this->shouldHaveType('Exception');
    }
}
