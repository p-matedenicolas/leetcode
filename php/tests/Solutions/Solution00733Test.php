<?php

namespace Tests\Solutions;

use App\Solutions\Solution00733;
use PHPUnit\Framework\TestCase;

final class Solution00733Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = [[1, 1, 1], [1, 1, 0], [1, 0, 1]];
        $input2 = 1;
        $input3 = 1;
        $input4 = 2;
        $output = [[2, 2, 2], [2, 2, 0], [2, 0, 1]];

        $solution = new Solution00733();
        $result = $solution->floodFill($input1, $input2, $input3, $input4);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = [[0, 0, 0], [0, 0, 0]];
        $input2 = 0;
        $input3 = 0;
        $input4 = 0;
        $output = [[0, 0, 0], [0, 0, 0]];

        $solution = new Solution00733();
        $result = $solution->floodFill($input1, $input2, $input3, $input4);

        $this->assertEquals($result, $output);
    }
}
