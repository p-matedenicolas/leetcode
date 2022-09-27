<?php

namespace App\Tests\Solutions;

use App\Solutions\Solution00409\Solution;
use PHPUnit\Framework\TestCase;

final class Solution00409Test extends TestCase
{
    public function testExample1(): void
    {
        $input = "abccccdd";
        $output = 7;

        $solution = new Solution();
        $result = $solution->longestPalindrome($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = "a";
        $output = 1;

        $solution = new Solution();
        $result = $solution->longestPalindrome($input);

        $this->assertEquals($result, $output);
    }
}
