<?php

namespace App\Solutions\Solution00217;

class Solution
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
