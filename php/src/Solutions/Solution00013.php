<?php

namespace App\Solutions\Solution00013;

class Solution
{
  const romanValues = [
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000,
  ];

  const romanSubstractionValues = [
    "IV" => 4,
    "IX" => 9,
    "XL" => 40,
    "XC" => 90,
    "CD" => 400,
    "CM" => 900,
  ];

  /**
   * @param String $s
   * @return Integer
   */
  function romanToInt($s)
  {
    $sArray = str_split($s);
    $total = 0;

    for ($i = 0; $i < count($sArray); $i++) {
      $currentLetter = $sArray[$i];
      $nextLetter = $sArray[$i + 1] ?? "";

      if (isset(self::romanSubstractionValues[$currentLetter . $nextLetter])) {
        $total += self::romanSubstractionValues[$currentLetter . $nextLetter];
        $i++;
      } elseif (isset(self::romanValues[$currentLetter])) {
        $total += self::romanValues[$currentLetter];
      }
    }

    return $total;
  }
}
