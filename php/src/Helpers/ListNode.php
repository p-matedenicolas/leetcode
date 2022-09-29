<?php

namespace App\Helpers;

/**
 * Definition for a singly-linked list.
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    /**
     * @param $val
     * @param $next
     */
    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    /**
     * @param $listArray
     * @return ListNode|null
     */
    public static function arrayToSortedList($listArray)
    {
        $prevListNode = null;
        $listNodeHead = null;

        foreach ($listArray as $listValue) {
            $currentListNode = new ListNode($listValue);

            if ($prevListNode !== null) {
                $prevListNode->next = $currentListNode;
            } else {
                $listNodeHead = $currentListNode;
            }

            $prevListNode = $currentListNode;
        }

        return $listNodeHead;
    }

    /**
     * @param $sortedList
     * @return array
     */
    public static function sortedListToArray($sortedList)
    {
        $listArray = [];
        while ($sortedList !== null) {
            $listArray[] = $sortedList->val;
            $sortedList = $sortedList->next;
        }

        return $listArray;
    }
}
