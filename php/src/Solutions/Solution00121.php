<?php

namespace App\Solutions;

class Solution00121
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
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

        return $maxProfit;
    }
}
