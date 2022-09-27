<?php

namespace App\Solutions\Solution00121;

class Solution
{
  /**
   * @param Integer[] $prices
   * @return Integer
   */
  function maxProfit($prices)
  {
    $maxProfit = 0;
    $currentMinPrice = $prices[0];

    for ($i = 0; $i < count($prices); $i++) {
      $currentProfit = $prices[$i] - $currentMinPrice;
      if ($maxProfit < $currentProfit) {
        $maxProfit = $currentProfit;
      }
      if ($prices[$i] < $currentMinPrice) {
        $currentMinPrice = $prices[$i];
      }
    }

    return $maxProfit ?? 0;
  }
}
