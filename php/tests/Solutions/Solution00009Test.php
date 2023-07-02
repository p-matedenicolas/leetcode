<?php

namespace Tests\Solutions;

use App\Solutions\Solution00009;
use PHPUnit\Framework\TestCase;

final class Solution00009Test extends TestCase
{
    public function testExample1(): void
    {
        $input = 121;
        $output = true;

        $solution = new Solution00009();
        $result = $solution->isPalindrome($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = -121;
        $output = false;

        $solution = new Solution00009();
        $result = $solution->isPalindrome($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = 10;
        $output = false;

        $solution = new Solution00009();
        $result = $solution->isPalindrome($input);

        $this->assertEquals($result, $output);
    }
}
