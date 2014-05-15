<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NullDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\NullDefinitionFactory');
    }

    function it_create_null_definition()
    {
        $this->create('test')->shouldHaveType('Robert\Definition\NullDefinition');
    }
}
