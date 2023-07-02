<?php

namespace Tests\Solutions;

use App\Solutions\Solution00245;
use PHPUnit\Framework\TestCase;

final class Solution00245Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = "egg";
        $input2 = "add";
        $output = true;

        $solution = new Solution00245();
        $result = $solution->isIsomorphic($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = "foo";
        $input2 = "bar";
        $output = false;

        $solution = new Solution00245();
        $result = $solution->isIsomorphic($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input1 = "paper";
        $input2 = "title";
        $output = true;

        $solution = new Solution00245();
        $result = $solution->isIsomorphic($input1, $input2);

        $this->assertEquals($result, $output);
    }

    public function testExampleExtra1(): void
    {
        $input1 = "badc";
        $input2 = "baba";
        $output = false;

        $solution = new Solution00245();
        $result = $solution->isIsomorphic($input1, $input2);

        $this->assertEquals($result, $output);
    }
}
