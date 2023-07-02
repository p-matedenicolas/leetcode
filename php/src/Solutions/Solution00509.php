<?php

namespace App\Solutions;

class Solution00509
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function fib($n)
    {
        if ($n === 0) {
            return 0;
        } elseif ($n === 1) {
            return 1;
        } else {
            return $this->fib($n - 1) + $this->fib($n - 2);
        }
    }
}
