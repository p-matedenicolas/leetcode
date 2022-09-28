<?php

namespace App\Tests\Solutions;

use PHPUnit\Framework\TestCase;
use App\Solutions\Solution00217\Solution;

final class Solution00217Test extends TestCase
{
    public function testExample1(): void
    {
        $input = [1, 2, 3, 1];
        $output = true;

        $solution = new Solution();
        $result = $solution->containsDuplicate($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = [1, 2, 3, 4];
        $output = false;

        $solution = new Solution();
        $result = $solution->containsDuplicate($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
        $output = true;

        $solution = new Solution();
        $result = $solution->containsDuplicate($input);

        $this->assertEquals($result, $output);
    }
}
