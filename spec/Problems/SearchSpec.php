<?php

namespace spec\Problems;

use Problems\Search;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SearchSpec extends ObjectBehavior
{
    const SORTED_ARRAY = array(-13, -7, -7, 8, 8, 8, 8, 8, 8, 23, 33, 54, 91, 144, 1984, 1984, 2001);

    function it_should_perform_binary_search_on_sorted_array()
    {
        $this->binarySearch(self::SORTED_ARRAY, 54)->shouldReturn(11);
        $this->binarySearch(self::SORTED_ARRAY, 2001)->shouldReturn(16);
        $this->binarySearch(self::SORTED_ARRAY, -13)->shouldReturn(0);
    }

    function it_should_perform_binary_search_on_sorted_array_with_duplicates()
    {
        $this->binarySearch(self::SORTED_ARRAY, -7)->shouldReturn(1);
        $this->binarySearch(self::SORTED_ARRAY, 8)->shouldReturn(3);
        $this->binarySearch(self::SORTED_ARRAY, 1984)->shouldReturn(14);
    }

    function it_should_return_negative_one_when_performing_a_binary_search_on_sorted_array_finds_no_element()
    {
        $this->binarySearch(self::SORTED_ARRAY, 1)->shouldReturn(-1);
        $this->binarySearch(self::SORTED_ARRAY, -20)->shouldReturn(-1);
        $this->binarySearch(self::SORTED_ARRAY, 3000)->shouldReturn(-1);
    }

    function it_should_return_negative_one_when_performing_a_binary_search_on_an_empty_array()
    {
        $this->binarySearch([], 3000)->shouldReturn(-1);
    }
}
