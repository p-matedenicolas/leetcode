<?php

namespace App\Solutions;

class Solution00009
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }

        $xString = str_split(strval($x));

        for ($i = 0; $i < count($xString) / 2; $i++) {
            $j = count($xString) - 1 - $i;
            if ($xString[$i] !== $xString[$j]) {
                return false;
            }
        }

        return true;
    }
}
