<?php

namespace App\Tests\Solutions;

use PHPUnit\Framework\TestCase;
use App\Helpers\ListNode;
use App\Solutions\Solution00876\Solution;

final class Solution00876Test extends TestCase
{
  public function testExample1(): void
  {
    $input = ListNode::arrayToSortedList([1, 2, 3, 4, 5]);
    $output = [3, 4, 5];

    $solution = new Solution();
    $result = $solution->middleNode($input);
    $result = ListNode::sortedListToArray($result);

    $this->assertEquals($result, $output);
  }

  public function testExample2(): void
  {
    $input = ListNode::arrayToSortedList([1, 2, 3, 4, 5, 6]);
    $output = [4, 5, 6];

    $solution = new Solution();
    $result = $solution->middleNode($input);
    $result = ListNode::sortedListToArray($result);

    $this->assertEquals($result, $output);
  }
}
