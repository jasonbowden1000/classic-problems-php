<?php

namespace spec\Problems;

use Problems\Strings;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringsSpec extends ObjectBehavior
{
    function it_should_detect_if_a_string_is_a_palindrome()
    {
        $this->isPalindrome("")->shouldBe(true);
        $this->isPalindrome("a")->shouldBe(true);
        $this->isPalindrome("rotator")->shouldBe(true);
        $this->isPalindrome("Madam")->shouldBe(true);
        $this->isPalindrome("jason")->shouldBe(false);
        $this->isPalindrome("dude")->shouldBe(false);
        $this->isPalindrome("axyza")->shouldBe(false);
        $this->isPalindrome("A car, a man, a maraca")->shouldBe(true);
    }
}
