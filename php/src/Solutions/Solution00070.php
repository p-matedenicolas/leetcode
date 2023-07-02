<?php

namespace App\Solutions;

class Solution00070
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function climbStairs($n)
    {
        $steps = [0, 1, 2];

        for ($i = 3; $i <= $n; $i++) {
            $steps[$i] = $steps[$i - 1] + $steps[$i - 2];
        }

        return $steps[$n];
    }
}
