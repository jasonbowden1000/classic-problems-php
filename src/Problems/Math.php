<?php

namespace Problems;

class Math
{
    public function reverseDigits($num)
    {
        $reversed = 0;

        while ($num) {
            $reversed = $reversed * 10 + $num % 10;
            $num = intdiv($num, 10);
        }

        return $reversed;
    }
}
