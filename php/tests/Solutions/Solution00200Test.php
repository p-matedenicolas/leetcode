<?php

namespace Tests\Solutions;

use App\Solutions\Solution00200;
use PHPUnit\Framework\TestCase;

final class Solution00200Test extends TestCase
{
    public function testExample1(): void
    {
        $input = [
            ["1", "1", "1", "1", "0"],
            ["1", "1", "0", "1", "0"],
            ["1", "1", "0", "0", "0"],
            ["0", "0", "0", "0", "0"]
        ];
        $output = 1;

        $solution = new Solution00200();
        $result = $solution->numIslands($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = [
            ["1", "1", "0", "0", "0"],
            ["1", "1", "0", "0", "0"],
            ["0", "0", "1", "0", "0"],
            ["0", "0", "0", "1", "1"]
        ];
        $output = 3;

        $solution = new Solution00200();
        $result = $solution->numIslands($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input = [
            ["0"]
        ];
        $output = 0;

        $solution = new Solution00200();
        $result = $solution->numIslands($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra2(): void
    {
        $input = [
            ["1"]
        ];
        $output = 1;

        $solution = new Solution00200();
        $result = $solution->numIslands($input);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra3(): void
    {
        $input = [
            ["1", "0", "1", "1", "1"],
            ["1", "0", "1", "0", "1"],
            ["1", "1", "1", "0", "1"]
        ];
        $output = 1;

        $solution = new Solution00200();
        $result = $solution->numIslands($input);

        $this->assertEquals($result, $output);
    }
}
