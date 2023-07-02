<?php

namespace Tests\Solutions;

use App\Solutions\Solution00001;
use PHPUnit\Framework\TestCase;

final class Solution00001Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = [2, 7, 11, 15];
        $input2 = 9;
        $output = [0, 1];

        $solution = new Solution00001();
        $result = $solution->twoSum($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = [3, 2, 4];
        $input2 = 6;
        $output = [1, 2];

        $solution = new Solution00001();
        $result = $solution->twoSum($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input1 = [3, 3];
        $input2 = 6;
        $output = [0, 1];

        $solution = new Solution00001();
        $result = $solution->twoSum($input1, $input2);

        $this->assertEquals($result, $output);
    }
}
