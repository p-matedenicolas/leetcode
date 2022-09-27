<?php

namespace App\Solutions\Solution00245;

class Solution
{
  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isIsomorphic($s, $t)
  {
    $sArray = str_split($s);
    $tArray = str_split($t);
    $sMapping = [];
    $tMapping = [];

    if (strlen($s) != strlen($t)) {
      return false;
    }

    for ($i = 0; $i < count($sArray); $i++) {
      $sLetter = $sArray[$i];
      $tLetter = $tArray[$i];

      if (
        (isset($sMapping[$sLetter]) && $sMapping[$sLetter] !== $tLetter) ||
        (isset($tMapping[$tLetter]) && $tMapping[$tLetter] !== $sLetter)
      ) {
        return false;
      }

      $sMapping[$sLetter] = $tLetter;
      $tMapping[$tLetter] = $sLetter;
    }

    return true;
  }
}
