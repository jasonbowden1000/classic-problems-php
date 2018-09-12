<?php

namespace spec\Problems;

use Problems\Sort;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SortSpec extends ObjectBehavior
{
  function it_should_return_an_ordered_array_when_merging_sorted_arrays()
  {
      $arr1 = [5, 7, 13, 13, 17];
      $arr2 = [3, 7, 11, 19];
      $merged = [3, 5, 7, 7, 11, 13, 13, 17, 19];
      $this->sortedMerged($arr1, $arr2)->shouldEqual($merged);
      $this->sortedMerged($arr2, $arr1)->shouldEqual($merged);
      $this->sortedMerged($arr1, $arr2)->shouldNotEqual([1, 2, 3, 4, 5, 6, 7]);
  }
}
