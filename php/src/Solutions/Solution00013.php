<?php

namespace App\Solutions;

class Solution00013
{
    public const ROMAN_VALUES = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    public const ROMAN_SUBSTRACTION_VALUES = [
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
    public function romanToInt($s)
    {
        $sArray = str_split($s);
        $total = 0;

        for ($i = 0; $i < count($sArray); $i++) {
            $currentLetter = $sArray[$i];
            $nextLetter = $sArray[$i + 1] ?? "";

            if (
                isset(
                    self::ROMAN_SUBSTRACTION_VALUES[$currentLetter . $nextLetter]
                )
            ) {
                $total +=
                    self::ROMAN_SUBSTRACTION_VALUES[$currentLetter . $nextLetter];
                $i++;
            } elseif (isset(self::ROMAN_VALUES[$currentLetter])) {
                $total += self::ROMAN_VALUES[$currentLetter];
            }
        }

        return $total;
    }
}
