<?php

namespace spec\Problems;

use Problems\Math;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MathSpec extends ObjectBehavior
{
    function it_should_reverse_digits()
    {
        $this->reverseDigits(4242)->shouldReturn(2424);
    }

    function it_should_reverse_negative_digits()
    {
        $this->reverseDigits(-413)->shouldReturn(-314);
    }

    function it_should_reverse_digits_with_trailing_zeros_without_returning_octals()
    {
        $this->reverseDigits(32100)->shouldReturn(123);
    }

}
