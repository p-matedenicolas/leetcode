<?php

namespace Tests\Solutions;

use App\Solutions\Solution00724;
use PHPUnit\Framework\TestCase;

final class Solution00724Test extends TestCase
{
    public function testExample1(): void
    {
        $input = [1, 7, 3, 6, 5, 6];
        $output = 3;

        $solution = new Solution00724();
        $result = $solution->pivotIndex($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = [1, 2, 3];
        $output = -1;

        $solution = new Solution00724();
        $result = $solution->pivotIndex($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = [2, 1, -1];
        $output = 0;

        $solution = new Solution00724();
        $result = $solution->pivotIndex($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input = [0];
        $output = 0;

        $solution = new Solution00724();
        $result = $solution->pivotIndex($input);

        $this->assertEquals($result, $output);
    }
}
