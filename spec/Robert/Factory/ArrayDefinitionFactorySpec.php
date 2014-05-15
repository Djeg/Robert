<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\ArrayDefinitionFactory');
    }

    function it_create_an_instance_of_array_definition()
    {
        $this->create('test', 'test')->shouldHaveType('Robert\Definition\ArrayDefinition');
    }
}
