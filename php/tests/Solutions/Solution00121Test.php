<?php

namespace Tests\Solutions;

use App\Solutions\Solution00121;
use PHPUnit\Framework\TestCase;

final class Solution00121Test extends TestCase
{
    public function testExample1(): void
    {
        $input = [7, 1, 5, 3, 6, 4];
        $output = 5;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = [7, 6, 4, 3, 1];
        $output = 0;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input = [1, 2, 3];
        $output = 2;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra2(): void
    {
        $input = [3, 2, 1];
        $output = 0;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra3(): void
    {
        $input = [3, 2, 1, 3, 2, 1];
        $output = 2;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra4(): void
    {
        $input = [7, 8, 10, 1, 2, 3];
        $output = 3;

        $solution = new Solution00121();
        $result = $solution->maxProfit($input);

        $this->assertEquals($result, $output);
    }
}
