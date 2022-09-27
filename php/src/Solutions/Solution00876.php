<?php

namespace App\Solutions\Solution00876;

use App\Helpers\ListNode;

class Solution
{
  /**
   * @param ListNode $head
   * @return ListNode
   */
  function middleNode($head)
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
