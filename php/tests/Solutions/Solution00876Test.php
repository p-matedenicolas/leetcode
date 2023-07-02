<?php

namespace Tests\Solutions;

use App\Helpers\ListNode;
use App\Solutions\Solution00876;
use PHPUnit\Framework\TestCase;

final class Solution00876Test extends TestCase
{
    public function testExample1(): void
    {
        $input = ListNode::arrayToSortedList([1, 2, 3, 4, 5]);
        $output = [3, 4, 5];

        $solution = new Solution00876();
        $result = $solution->middleNode($input);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = ListNode::arrayToSortedList([1, 2, 3, 4, 5, 6]);
        $output = [4, 5, 6];

        $solution = new Solution00876();
        $result = $solution->middleNode($input);
        $result = ListNode::sortedListToArray($result);

        $this->assertEquals($result, $output);
    }
}
