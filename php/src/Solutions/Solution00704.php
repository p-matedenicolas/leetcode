<?php

namespace App\Solutions;

class Solution00704
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function search($nums, $target)
    {
        $index = -1;
        $lastIndex = count($nums) - 1;
        $currentIndex = intval((count($nums) - 1) / 2);

        while ($lastIndex !== $currentIndex) {
            if ($target === $nums[$currentIndex]) {
                return $currentIndex;
            } elseif ($target < $nums[$currentIndex]) {
                $lastIndex = $currentIndex;
                $currentIndex = intval(floor($currentIndex / 2));
            } elseif ($target > $nums[$currentIndex]) {
                $currentIndex = intval(ceil(($currentIndex + $lastIndex) / 2));
            }
        }

        if ($lastIndex === $currentIndex && $target === $nums[$currentIndex]) {
            return $currentIndex;
        }

        return $index;
    }
}
