<?php

namespace App\Solutions\Solution00001;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums) - 1; $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                $sum = $nums[$i] + $nums[$j];
                if ($sum === $target) {
                    return [$i, $j];
                }
            }
        }

        return null;
    }
}
