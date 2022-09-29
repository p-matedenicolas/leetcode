<?php

namespace App\Solutions;

use App\Helpers\ListNode;

class Solution00876
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function middleNode($head)
    {
        $currentNode = $head;
        $nodesArray = [];
        $numNodes = 0;

        while ($currentNode !== null) {
            $nodesArray[] = $currentNode;
            $numNodes++;
            $currentNode = $currentNode->next;
        }

        return $nodesArray[$numNodes / 2];
    }
}
