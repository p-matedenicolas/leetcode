<?php

namespace App\Solutions\Solution00409;

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s)
    {
        $map = [];
        $longestPalindrome = 0;
        $chars = str_split($s);

        foreach ($chars as $char) {
            if (isset($map[$char])) {
                $map[$char] += 1;
            } else {
                $map[$char] = 1;
            }

            if ($map[$char] === 2) {
                $longestPalindrome += 2;
                unset($map[$char]);
            }
        }

        if (!empty($map)) {
            $longestPalindrome += 1;
        }

        return $longestPalindrome;
    }
}
