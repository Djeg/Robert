<?php

namespace spec\Robert\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Robert\Builder\BuildableDefinition;
use Robert\Factory\DictionaryFactory;
use Robert\Dictionary;
use Robert\Definition\Definable;

class DictionaryBuilderSpec extends ObjectBehavior
{
    function let(BuildableDefinition $definitionBuilder, DictionaryFactory $dictionaryFactory, Dictionary $dictionary)
    {
        $dictionaryFactory->create()->willReturn($dictionary);

        $this->beConstructedWith($definitionBuilder, $dictionaryFactory, $dictionary);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Robert\Builder\DictionaryBuilder');
    }

    function it_is_a_dictionary_builder()
    {
        $this->shouldHaveType('Robert\Builder\BuildableDictionary');
    }

    function it_build_only_array_data()
    {
        $this->shouldThrow('InvalidArgumentException')->duringBuild('some invalid data');
    }

    function it_build_a_dictionary($dictionary, $definitionBuilder, Definable $definition)
    {
        $data = ['test' => 'some data'];

        $definitionBuilder->build('test', 'some data')->shouldBeCalled()->willReturn($definition);
        $dictionary->addDefinition($definition)->shouldBeCalled();

        $this->build($data);
    }
}
