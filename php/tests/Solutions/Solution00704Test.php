<?php

namespace Tests\Solutions;

use App\Solutions\Solution00704;
use PHPUnit\Framework\TestCase;

final class Solution00704Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = [-1, 0, 3, 5, 9, 12];
        $input2 = 9;
        $output = 4;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = [-1, 0, 3, 5, 9, 12];
        $input2 = 2;
        $output = -1;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input1 = [-1, 0, 3, 5, 9, 12];
        $input2 = 12;
        $output = 5;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra2(): void
    {
        $input1 = [5];
        $input2 = 5;
        $output = 0;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra3(): void
    {
        $input1 = [1, 5];
        $input2 = 5;
        $output = 1;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra4(): void
    {
        $input1 = [5, 7];
        $input2 = 5;
        $output = 0;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra5(): void
    {
        $input1 = [5, 6, 7];
        $input2 = 5;
        $output = 0;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra6(): void
    {
        $input1 = [-1, 0, 3, 5, 9, 12];
        $input2 = 13;
        $output = -1;

        $solution = new Solution00704();
        $result = $solution->search($input1, $input2);

        $this->assertEquals($result, $output);
    }
}
