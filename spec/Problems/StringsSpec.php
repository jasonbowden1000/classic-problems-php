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

    function it_should_convert_roman_numerals_to_arabic()
    {
        $this->romanToArabic('MDCCCLXVI')->shouldReturn(1866);
        $this->romanToArabic('XIV')->shouldReturn(14);
        $this->romanToArabic('LXXXIX')->shouldReturn(89);
        $this->romanToArabic('XCI')->shouldReturn(91);
        $this->romanToArabic('DCCCXC')->shouldReturn(890);
        $this->romanToArabic('MCMLXXXIX')->shouldReturn(1989);
    }

    function it_should_test_for_valid_roman_numerals()
    {
         $this->isRoman('XXXX')->shouldBe(false);
         $this->isRoman('LL')->shouldBe(false);
         $this->isRoman('DDC')->shouldBe(false);
         $this->isRoman('XVV')->shouldBe(false);
         $this->isRoman('IX')->shouldBe(true);
         $this->isRoman('XC')->shouldBe(true);
         $this->isRoman('XL')->shouldBe(true);
         $this->isRoman('CD')->shouldBe(true);
         $this->isRoman('CM')->shouldBe(true);
         $this->isRoman('IC')->shouldBe(false);
         $this->isRoman('LC')->shouldBe(false);
         $this->isRoman('VX')->shouldBe(false);
         $this->isRoman('DM')->shouldBe(false);
         $this->isRoman('CDM')->shouldBe(false);
         $this->isRoman('IXC')->shouldBe(false);
         $this->isRoman('IVX')->shouldBe(false);
         $this->isRoman('XIXIX')->shouldBe(false);
         $this->isRoman('XVIV')->shouldBe(false);
         $this->isRoman('XIIV')->shouldBe(false);
         $this->isRoman('VIX')->shouldBe(false);
         $this->isRoman('XXC')->shouldBe(false);
         $this->isRoman('CCCXCCC')->shouldBe(false);
         $this->isRoman('LXL')->shouldBe(false);
         $this->isRoman('IXI')->shouldBe(false);
         $this->isRoman('IXXXI')->shouldBe(false);
         $this->isRoman('XXX')->shouldBe(true);
         $this->isRoman('XIV')->shouldBe(true);
         $this->isRoman('CXC')->shouldBe(true);
         $this->isRoman('XIX')->shouldBe(true);
    }

    function it_should_convert_arabic_numerals_to_roman()
    {
        $this->arabicToRoman(1666)->shouldBe('MDCLXVI');
        $this->arabicToRoman(91)->shouldBe('XCI');
    }
}
