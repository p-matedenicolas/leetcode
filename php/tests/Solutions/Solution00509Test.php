<?php

namespace Tests\Solutions;

use App\Solutions\Solution00509;
use PHPUnit\Framework\TestCase;

final class Solution00509Test extends TestCase
{
    public function testExample1(): void
    {
        $input = 2;
        $output = 1;

        $solution = new Solution00509();
        $result = $solution->fib($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = 3;
        $output = 2;

        $solution = new Solution00509();
        $result = $solution->fib($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = 4;
        $output = 3;

        $solution = new Solution00509();
        $result = $solution->fib($input);

        $this->assertEquals($result, $output);
    }
}
