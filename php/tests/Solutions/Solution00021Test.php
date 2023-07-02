<?php

namespace Tests\Solutions;

use App\Helpers\ListNode;
use App\Solutions\Solution00021;
use PHPUnit\Framework\TestCase;

final class Solution00021Test extends TestCase
{
    public function testExample1(): void
    {
        $input1 = ListNode::arrayToSortedList([1, 2, 4]);
        $input2 = ListNode::arrayToSortedList([1, 3, 4]);
        $output = [1, 1, 2, 3, 4, 4];

        $solution = new Solution00021();
        $result = $solution->mergeTwoLists($input1, $input2);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input1 = ListNode::arrayToSortedList([]);
        $input2 = ListNode::arrayToSortedList([]);
        $output = [];

        $solution = new Solution00021();
        $result = $solution->mergeTwoLists($input1, $input2);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input1 = ListNode::arrayToSortedList([]);
        $input2 = ListNode::arrayToSortedList([0]);
        $output = [0];

        $solution = new Solution00021();
        $result = $solution->mergeTwoLists($input1, $input2);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }
}
