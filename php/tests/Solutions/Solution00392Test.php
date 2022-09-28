<?php

namespace App\Tests\Solutions;

use App\Solutions\Solution00392\Solution;
use PHPUnit\Framework\TestCase;

final class Solution00392Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = "abc";
        $input2 = "ahbgdc";
        $output = true;

        $solution = new Solution();
        $result = $solution->isSubsequence($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = "axc";
        $input2 = "ahbgdc";
        $output = false;

        $solution = new Solution();
        $result = $solution->isSubsequence($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input1 = "";
        $input2 = "ahbgdc";
        $output = true;

        $solution = new Solution();
        $result = $solution->isSubsequence($input1, $input2);

        $this->assertEquals($result, $output);
    }
}
