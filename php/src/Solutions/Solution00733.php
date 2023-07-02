<?php

namespace App\Solutions;

class Solution00733
{
    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    public function floodFill($image, $sr, $sc, $color)
    {
        $initialPixel = $image[$sr][$sc];

        $this->changePixel($image, $sr, $sc, $color, $initialPixel);

        return $image;
    }

    /**
     * @param $image
     * @param $sr
     * @param $sc
     * @param $color
     * @return void
     */
    protected function changePixel(&$image, $sr, $sc, $color, $initialPixel)
    {
        if (isset($image[$sr][$sc]) && $image[$sr][$sc] !== $color && $image[$sr][$sc] === $initialPixel) {
            $image[$sr][$sc] = $color;

            $this->changePixel($image, $sr + 1, $sc, $color, $initialPixel);
            $this->changePixel($image, $sr - 1, $sc, $color, $initialPixel);
            $this->changePixel($image, $sr, $sc + 1, $color, $initialPixel);
            $this->changePixel($image, $sr, $sc - 1, $color, $initialPixel);
        }
    }
}
