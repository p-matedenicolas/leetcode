<?php

namespace App\Solutions;

class Solution00392
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function isSubsequence($s, $t)
    {
        $sIndex = 0;
        $sArray = str_split($s);
        $tArray = str_split($t);

        if (empty($s)) {
            return true;
        }

        for ($i = 0; $i < count($tArray); $i++) {
            if ($sArray[$sIndex] === $tArray[$i]) {
                $sIndex++;
            }
        }

        return $sIndex === count($sArray);
    }
}
