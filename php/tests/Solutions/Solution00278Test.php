<?php

namespace Tests\Solutions;

use App\Solutions\Solution00278;
use PHPUnit\Framework\TestCase;

final class Solution00278Test extends TestCase
{
    public function testExample1(): void
    {
        $input = 5;
        $output = 4;

        $solution = new Solution00278();
        $solution->setVersions($input, $output);
        $result = $solution->firstBadVersion($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = 1;
        $output = 1;

        $solution = new Solution00278();
        $solution->setVersions($input, $output);
        $result = $solution->firstBadVersion($input);

        $this->assertEquals($result, $output);
    }
}
