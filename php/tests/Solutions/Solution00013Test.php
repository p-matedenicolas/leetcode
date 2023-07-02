<?php

namespace Tests\Solutions;

use App\Solutions\Solution00013;
use PHPUnit\Framework\TestCase;

final class Solution00013Test extends TestCase
{
    public function testExample1(): void
    {
        $input = "III";
        $output = 3;

        $solution = new Solution00013();
        $result = $solution->romanToInt($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = "LVIII";
        $output = 58;

        $solution = new Solution00013();
        $result = $solution->romanToInt($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = "MCMXCIV";
        $output = 1994;

        $solution = new Solution00013();
        $result = $solution->romanToInt($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input = "DCXXI";
        $output = 621;

        $solution = new Solution00013();
        $result = $solution->romanToInt($input);

        $this->assertEquals($result, $output);
    }
}
