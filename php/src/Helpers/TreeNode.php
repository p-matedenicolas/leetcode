<?php

namespace App\Helpers;

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    /**
     * @param $val
     * @param $left
     * @param $right
     */
    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * @param $binaryTree
     * @return array|mixed|null
     */
    public static function arrayToBinaryTree($binaryTree)
    {
        $currentIndex = 0;
        $root = isset($binaryTree[0]) ? new TreeNode($binaryTree[0]) : null;

        self::createChildren($binaryTree, $root, $currentIndex);

        return $root;
    }

    /**
     * @param $treeNode
     * @param $binaryTree
     * @param $currentIndex
     * @return void
     */
    protected static function createChildren(&$binaryTree, &$treeNode, $currentIndex)
    {
        if (isset($treeNode)) {
            $leftChildIndex = (2 * $currentIndex) + 1;
            $leftChild = isset($binaryTree[$leftChildIndex]) ? new TreeNode($binaryTree[$leftChildIndex]) : null;
            $treeNode->left = $leftChild;

            self::createChildren($binaryTree, $leftChild, $leftChildIndex);

            $rightChildIndex = (2 * $currentIndex) + 2;
            $rightChild = isset($binaryTree[$rightChildIndex]) ? new TreeNode($binaryTree[$rightChildIndex]) : null;
            $treeNode->right = $rightChild;

            self::createChildren($binaryTree, $rightChild, $rightChildIndex);
        }
    }

    /**
     * @param $root
     * @return array
     */
    public static function binaryTreeToArray($root)
    {
        $binaryTreeArray = [];

        if (!isset($root)) {
            return $binaryTreeArray;
        }

        $levelTreeNodes = [$root];

        while (!empty($levelTreeNodes)) {
            $nextLevelTreeNodes = [];
            foreach ($levelTreeNodes as $levelTreeNode) {
                if (isset($levelTreeNode)) {
                    $binaryTreeArray[] = $levelTreeNode->val;
                    $nextLevelTreeNodes[] = $levelTreeNode->left;
                    $nextLevelTreeNodes[] = $levelTreeNode->right;
                } else {
                    $binaryTreeArray[] = null;
                }
            }
            $noNewNextTreeNodes = empty(array_filter($nextLevelTreeNodes));

            if ($noNewNextTreeNodes) {
                $levelTreeNodes = [];
            } else {
                $levelTreeNodes = $nextLevelTreeNodes;
            }
        }

        return $binaryTreeArray;
    }
}
