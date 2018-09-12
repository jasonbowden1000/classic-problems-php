<?php

namespace Problems;

class Sort
{
    public function sortedMerged(array $arr1, array $arr2)
    {
        $merged = [];
        $length1 = count($arr1);
        $length2 = count($arr2);

        for ($i = 0, $j = 0; $i < $length1 || $j < $length2;) {
            $merged[$i + $j] = $i < $length1 && $arr1[$i] < $arr2[$j] ? $arr1[$i++] : $arr2[$j++];
        }

        return $merged;
    }
}
