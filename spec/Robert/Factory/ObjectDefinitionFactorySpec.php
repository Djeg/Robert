<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjectDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\ObjectDefinitionFactory');
    }

    function it_create_an_instance_of_object_definition()
    {
        $this->create('test', 'plop')->shouldHaveType('Robert\Definition\ObjectDefinition');
    }
}
