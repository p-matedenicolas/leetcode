<?php

namespace App\Solutions\Solution00206;

use App\Helpers\ListNode;

class Solution
{
    /**
     * @param ListNode|null $head
     * @return ListNode
     */
    public function reverseList($head)
    {
        $prevListNode = null;
        $currentListNode = $head;
        $nextListNode =
            $currentListNode !== null ? $currentListNode->next : null;

        while ($currentListNode !== null) {
            $currentListNode->next = $prevListNode;

            $prevListNode = $currentListNode;
            $currentListNode = $nextListNode;
            $nextListNode =
                $currentListNode !== null ? $currentListNode->next : null;
        }

        return $prevListNode;
    }
}
