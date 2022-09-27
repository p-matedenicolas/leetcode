<?php

namespace App\Solutions\Solution00392;

class Solution
{
  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isSubsequence($s, $t)
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
