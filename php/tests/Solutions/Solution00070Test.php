<?php

namespace Tests\Solutions;

use App\Solutions\Solution00070;
use PHPUnit\Framework\TestCase;

final class Solution00070Test extends TestCase
{
    public function testExample1(): void
    {
        $input = 2;
        $output = 2;

        $solution = new Solution00070();
        $result = $solution->climbStairs($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = 3;
        $output = 3;

        $solution = new Solution00070();
        $result = $solution->climbStairs($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input = 1;
        $output = 1;

        $solution = new Solution00070();
        $result = $solution->climbStairs($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra2(): void
    {
        $input = 38;
        $output = 63245986;

        $solution = new Solution00070();
        $result = $solution->climbStairs($input);

        $this->assertEquals($result, $output);
    }
}
