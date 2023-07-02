<?php

namespace App\Solutions;

class Solution00724
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function pivotIndex($nums)
    {
        $sumLeft = 0;
        $sumRight = 0;

        for ($i = 0; $i < count($nums); $i++) {
            $sumRight += $nums[$i];
        }

        for ($i = 0; $i < count($nums); $i++) {
            $sumLeft += $nums[$i - 1] ?? 0;
            $sumRight -= $nums[$i];

            if ($sumLeft === $sumRight) {
                return $i;
            }
        }

        return -1;
    }
}
