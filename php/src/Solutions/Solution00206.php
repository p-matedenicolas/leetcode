<?php

namespace App\Solutions;

use App\Helpers\ListNode;

class Solution00206
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
