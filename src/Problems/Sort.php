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
          if ($i < $length1 && ($j >= $length2 || $arr1[$i] < $arr2[$j])) {
            $merged[$i + $j] = $arr1[$i++];
          } else {
            $merged[$i + $j] = $arr2[$j++];
          }
        }

        return $merged;
    }
}
