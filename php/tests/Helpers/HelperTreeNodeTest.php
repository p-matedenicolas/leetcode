<?php

namespace Tests\Helpers;

use App\Helpers\TreeNode;
use PHPUnit\Framework\TestCase;

final class HelperTreeNodeTest extends TestCase
{
    public function test1(): void
    {
        $node7 = new TreeNode(7);
        $node15 = new TreeNode(15);
        $node20 = new TreeNode(20, $node15, $node7);
        $node9 = new TreeNode(9);

        $input = new TreeNode(3, $node9, $node20);
        $output = [3, 9, 20, null, null, 15, 7];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test2(): void
    {
        $input = new TreeNode(1);
        $output = [1];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test3(): void
    {
        $input = null;
        $output = [];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test4(): void
    {
        $input = TreeNode::arrayToBinaryTree([3, 9, 20, null, null, 15, 7]);
        $output = [3, 9, 20, null, null, 15, 7];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test5(): void
    {
        $input = TreeNode::arrayToBinaryTree([1]);
        $output = [1];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }

    public function test6(): void
    {
        $input = TreeNode::arrayToBinaryTree([]);
        $output = [];

        $result = TreeNode::binaryTreeToArray($input);

        $this->assertEquals($result, $output);
    }
}
