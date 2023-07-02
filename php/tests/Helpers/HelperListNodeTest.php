<?php

namespace Tests\Helpers;

use App\Helpers\ListNode;
use PHPUnit\Framework\TestCase;

final class HelperListNodeTest extends TestCase
{
    public function test1(): void
    {
        $output = [1, 2, 4];
        $input = ListNode::arrayToSortedList($output);

        $result = ListNode::sortedListToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test2(): void
    {
        $output = [0];
        $input = ListNode::arrayToSortedList($output);

        $result = ListNode::sortedListToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test3(): void
    {
        $output = [];
        $input = ListNode::arrayToSortedList($output);

        $result = ListNode::sortedListToArray($input);

        $this->assertEquals($result, $output);
    }
}
