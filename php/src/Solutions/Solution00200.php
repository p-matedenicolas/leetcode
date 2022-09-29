<?php

namespace App\Solutions;

class Solution00200
{
    /**
     * @param String[][] $grid
     * @return Integer
     */
    public function numIslands($grid)
    {
        $numIslands = 0;
        for ($lat = 0; $lat < count($grid); $lat++) {
            for ($lon = 0; $lon < count($grid[$lat]); $lon++) {
                if ($grid[$lat][$lon] === "1") {
                    $numIslands++;
                    $this->markFoundIsland($grid, $lat, $lon);
                }
            }
        }

        return $numIslands;
    }

    /**
     * @param $grid
     * @param $lat
     * @param $lon
     * @return void
     */
    protected function markFoundIsland(&$grid, $lat, $lon)
    {
        if (isset($grid[$lat][$lon]) && $grid[$lat][$lon] === "1") {
            $grid[$lat][$lon] = "2";
            $this->markFoundIsland($grid, $lat - 1, $lon);
            $this->markFoundIsland($grid, $lat + 1, $lon);
            $this->markFoundIsland($grid, $lat, $lon - 1);
            $this->markFoundIsland($grid, $lat, $lon + 1);
        }
    }
}
