<?php

namespace App\Solutions;

class Solution00053
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArray($nums)
    {
        $sum = $nums[0];
        $maxSum = max($sum, 0);

        for ($i = 1; $i < count($nums); $i++) {
            $maxSum += $nums[$i];
            $sum = max($sum, $maxSum);
            $maxSum = max($maxSum, 0);
        }

        return $sum;
    }
}
