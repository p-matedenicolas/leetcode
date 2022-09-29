<?php

namespace App\Solutions;

use App\Helpers\TreeNode;

class Solution00102
{
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    public function levelOrder($root)
    {
        $levelOrder = [];
        $currentLevel = [];

        if (isset($root)) {
            $currentLevel = [$root];
        }

        while (!empty($currentLevel)) {
            $currentLevelOrder = [];
            $nextLevel = [];

            foreach ($currentLevel as $treeNode) {
                if (isset($treeNode)) {
                    $currentLevelOrder[] = $treeNode->val;

                    if (isset($treeNode->left)) {
                        $nextLevel[] = $treeNode->left;
                    }

                    if (isset($treeNode->right)) {
                        $nextLevel[] = $treeNode->right;
                    }
                }
            }

            $levelOrder[] = $currentLevelOrder;
            $currentLevel = $nextLevel;
        }

        return $levelOrder;
    }
}
