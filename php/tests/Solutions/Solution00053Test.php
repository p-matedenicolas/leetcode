<?php

namespace App\Tests\Solutions;

use PHPUnit\Framework\TestCase;
use App\Solutions\Solution00053\Solution;

final class Solution00053Test extends TestCase
{
  public function testExample1(): void
  {
    $input = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
    $output = 6;

    $solution = new Solution();
    $result = $solution->maxSubArray($input);

    $this->assertEquals($result, $output);
  }

  public function testExample2(): void
  {
    $input = [1];
    $output = 1;

    $solution = new Solution();
    $result = $solution->maxSubArray($input);

    $this->assertEquals($result, $output);
  }

  public function testExample3(): void
  {
    $input = [5, 4, -1, 7, 8];
    $output = 23;

    $solution = new Solution();
    $result = $solution->maxSubArray($input);

    $this->assertEquals($result, $output);
  }
}
