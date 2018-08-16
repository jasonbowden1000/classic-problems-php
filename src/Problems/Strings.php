<?php

namespace Problems;

class Strings
{
    public function isPalindrome($str)
    {
        $i = 0;
        $j = strlen($str) - 1;
        $result = true;

        while ($i < $j) {
            while (!ctype_alpha($str[$i]) && $i < $j) {
                $i += 1;
            }

            while (!ctype_alpha($str[$j]) && $i < $j) {
                $j -= 1;
            }

            if (strcasecmp($str[$i], $str[$j]) !== 0) {
                $result = false;
            }

            $i += 1;
            $j -= 1;
        }

        return $result;
    }
}
