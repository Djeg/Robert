<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScalarDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\ScalarDefinitionFactory');
    }

    function it_create_an_instance_of_scalar_definition()
    {
        $this->create('test', 'some data')->shouldHaveType('Robert\Definition\ScalarDefinition');
    }
}
