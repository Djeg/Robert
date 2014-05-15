<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BooleanDefinitionFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\BooleanDefinitionFactory');
    }

    function it_create_a_boolean_definition_instance()
    {
        $this->create('test', 'plop')->shouldHaveType('Robert\Definition\BooleanDefinition');
    }
}
