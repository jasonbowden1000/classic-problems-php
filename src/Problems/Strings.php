<?php

namespace Problems;

class Strings
{
    public function isPalindrome($str)
    {
        $letters = preg_replace('/[^a-zA-Z]/', '', $str);
        $letters = strtolower($letters);
        return $letters === strrev($letters);
    }
}
