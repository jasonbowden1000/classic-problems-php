<?php

namespace Problems;

class Strings
{
    const romanMap = [
      "I" => 1,
      "IV" => 4,
      "V" => 5,
      "IX" => 9,
      "X" => 10,
      "XL" => 40,
      "L" => 50,
      "XC" => 90,
      "C" => 100,
      "CD" => 400,
      "D" => 500,
      "CM" => 900,
      "M" => 1000
    ];

    public function arabicToRoman($arabic)
    {
        $roman = '';
        $map = array_reverse(self::romanMap);

        foreach ($map as $k => $v) {
            while ($arabic >= $v) {
                $roman = $roman . $k;
                $arabic -= $v;
            }
        }

        return $roman;
    }

    public function isPalindrome($str)
    {
        $letters = preg_replace('/[^a-zA-Z]/', '', $str);
        $letters = strtolower($letters);
        return $letters === strrev($letters);
    }

    public function isRoman($n)
    {
        $re = '/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/';
        return preg_match($re, $n) === 1;
    }

    public function romanToArabic($roman)
    {
        $arabic = 0;

        $arr = array_map(function($v) {
            return self::romanMap[$v];
        }, str_split($roman));

        $arrLength = count($arr) - 1;

        $arabic += $arr[$arrLength];

        for ($i = $arrLength - 1; $i >= 0; --$i) {
            $arabic += $arr[$i] >= $arr[$i + 1] ? $arr[$i] : -$arr[$i];
        }

        return $arabic;
    }
}
