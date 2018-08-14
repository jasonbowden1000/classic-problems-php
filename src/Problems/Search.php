<?php

namespace Problems;

class Search
{
    public function binarySearch(array $arr, int $value)
    {
        $lower = 0; 
        $upper = count($arr) - 1; // PHP count() is O(1)
        $result = -1;

        while ($upper >= $lower) {
            $middle = $lower + intdiv($upper - $lower, 2);

            if ($arr[$middle] > $value) {
                $upper = $middle - 1;
            } else if ($arr[$middle] < $value) {
                $lower = $middle + 1;
            } else {
                $result = $middle;
                $upper = $middle - 1;
            }
        }

        return $result;
    }
}
