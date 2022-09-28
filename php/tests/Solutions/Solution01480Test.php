<?php

namespace App\Tests\Solutions;

use PHPUnit\Framework\TestCase;
use App\Solutions\Solution01480\Solution;

final class Solution01480Test extends TestCase
{
    public function testExample1(): void
    {
        $input = [1, 2, 3, 4];
        $output = [1, 3, 6, 10];

        $solution = new Solution();
        $result = $solution->runningSum($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = [1, 1, 1, 1, 1];
        $output = [1, 2, 3, 4, 5];

        $solution = new Solution();
        $result = $solution->runningSum($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = [3, 1, 2, 10, 1];
        $output = [3, 4, 6, 16, 17];

        $solution = new Solution();
        $result = $solution->runningSum($input);

        $this->assertEquals($result, $output);
    }
}
