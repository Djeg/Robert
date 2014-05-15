<?php

namespace spec\Robert\Definition;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjectDefinitionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('test');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Definition\ObjectDefinition');
    }

    function it_is_a_definition()
    {
        $this->shouldHaveType('Robert\Definition\Definable');
    }

    function it_contains_a_word_and_a_object_definition()
    {
        $this->beConstructedWith('test', 'some scalar');

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldHaveType('StdClass');
    }

    function it_does_not_cast_object_content()
    {
        $instance = new \DateTime;
        $this->beConstructedWith('test', $instance);

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldReturn($instance);
    }

    function it_walk_through_an_array_element()
    {
        $this->beConstructedWith('test', ['a' => 'a', 'b' => 'b']);

        $instance = new \StdClass;
        $instance->a = 'a';
        $instance->b = 'b';

        $this->getWord()->shouldReturn('test');
        $this->getContent()->shouldBeTheSameObject($instance);
    }

    function getMatchers()
    {
        return [
            'beTheSameObject' => function($subject, $instance) {
                if (!is_a($subject, get_class($instance))) {
                    return false;
                }

                foreach ($subject as $key => $value) {
                    if (!property_exists($instance, $key)) {
                        return false;
                    }

                    if ($subject->{$key} !== $instance->{$key}) {
                        return false;
                    }
                }

                return true;
            },
        ];
    }
}
