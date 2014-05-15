<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\NumericDefinitionFactory');
    }

    function it_create_an_instance_of_numeric_definition()
    {
        $this->create('test', 'plop')->shouldHaveType('Robert\Definition\NumericDefinition');
    }
}
