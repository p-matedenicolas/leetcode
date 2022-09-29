<?php

namespace App\Solutions;

use App\Helpers\ListNode;

class Solution00021
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoLists($list1, $list2)
    {
        $listNodeResultHead = null;
        $listNodeResult = null;
        $prevListNodeResult = null;

        while ($list1 !== null || $list2 !== null) {
            $currentListNode = null;

            if (
                ($list1 !== null &&
                    $list2 !== null &&
                    $list1->val < $list2->val) ||
                ($list1 !== null && $list2 === null)
            ) {
                $currentListNode = $list1;
                $list1 = $list1->next;
            } else {
                $currentListNode = $list2;
                $list2 = $list2->next;
            }

            $listNodeResult = new ListNode($currentListNode->val);

            if ($prevListNodeResult !== null) {
                $prevListNodeResult->next = $listNodeResult;
            } else {
                $listNodeResultHead = $listNodeResult;
            }

            $prevListNodeResult = $listNodeResult;
        }

        return $listNodeResultHead;
    }
}
