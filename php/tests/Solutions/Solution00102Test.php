<?php

namespace Tests\Solutions;

use App\Helpers\TreeNode;
use App\Solutions\Solution00102;
use PHPUnit\Framework\TestCase;

final class Solution00102Test extends TestCase
{
    public function testExample1(): void
    {
        $input = TreeNode::arrayToBinaryTree([3, 9, 20, null, null, 15, 7]);
        $output = [[3], [9, 20], [15, 7]];

        $solution = new Solution00102();
        $result = $solution->levelOrder($input);

        $this->assertEquals($result, $output);
    }

    public function testExample2(): void
    {
        $input = TreeNode::arrayToBinaryTree([1]);
        $output = [[1]];

        $solution = new Solution00102();
        $result = $solution->levelOrder($input);

        $this->assertEquals($result, $output);
    }

    public function testExample3(): void
    {
        $input = TreeNode::arrayToBinaryTree([]);
        $output = [];

        $solution = new Solution00102();
        $result = $solution->levelOrder($input);

        $this->assertEquals($result, $output);
    }
}
