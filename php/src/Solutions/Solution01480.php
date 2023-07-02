<?php

namespace App\Solutions;

class Solution01480
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function runningSum($nums)
    {
        $result = [];
        $sum = 0;

        foreach ($nums as $num) {
            $sum += $num;

            $result[] = $sum;
        }

        return $result;
    }
}
