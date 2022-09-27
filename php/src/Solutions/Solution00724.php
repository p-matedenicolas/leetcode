<?php

namespace App\Solutions\Solution00724;

class Solution
{
  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function pivotIndex($nums)
  {
    $sumLeft = 0;
    $sumRight = 0;

    for ($i = 0; $i < count($nums); $i++) {
      $sumRight += $nums[$i];
    }

    for ($i = 0; $i < count($nums); $i++) {
      $sumLeft += $nums[$i - 1] ?? 0;
      $sumRight -= $nums[$i];

      if ($sumLeft === $sumRight) {
        return $i;
      }
    }

    return -1;
  }
}
