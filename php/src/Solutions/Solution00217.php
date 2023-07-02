<?php

namespace App\Solutions;

class Solution00217
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        $appeared = [];
        foreach ($nums as $num) {
            if (isset($appeared[$num])) {
                return true;
            }

            $appeared[$num] = true;
        }

        return false;
    }
}
