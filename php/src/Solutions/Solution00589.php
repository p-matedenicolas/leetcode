<?php

namespace App\Solutions;

use App\Helpers\Node;

class Solution00589
{
    /**
     * @param Node $root
     * @return integer[]
     */
    public function preorder($root)
    {
        $treeArray = [];

        $this->getNodeValues($root, $treeArray);

        return $treeArray;
    }

    /**
     * @param $node
     * @param $treeArray
     * @return void
     */
    protected function getNodeValues($node, &$treeArray)
    {
        if ($node !== null) {
            $treeArray[] = $node->val;

            foreach ($node->children as $child) {
                $this->getNodeValues($child, $treeArray);
            }
        }
    }
}
