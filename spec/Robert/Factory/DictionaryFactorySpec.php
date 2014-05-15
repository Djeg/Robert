<?php

namespace spec\Robert\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Dictionary;

class DictionaryFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Factory\DictionaryFactory');
    }

    function it_create_instance_of_dictionary()
    {
        $this->create()->shouldBeLike(new Dictionary);
    }
}
