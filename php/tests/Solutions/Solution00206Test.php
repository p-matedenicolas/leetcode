<?php

namespace Tests\Solutions;

use App\Helpers\ListNode;
use App\Solutions\Solution00206;
use PHPUnit\Framework\TestCase;

final class Solution00206Test extends TestCase
{
    public function testExample1(): void
    {
        $input = ListNode::arrayToSortedList([1, 2, 3, 4, 5]);
        $output = [5, 4, 3, 2, 1];

        $solution = new Solution00206();
        $result = $solution->reverseList($input);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = ListNode::arrayToSortedList([1, 2]);
        $output = [2, 1];

        $solution = new Solution00206();
        $result = $solution->reverseList($input);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = ListNode::arrayToSortedList([]);
        $output = [];

        $solution = new Solution00206();
        $result = $solution->reverseList($input);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }
}
