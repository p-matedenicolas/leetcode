<?php

namespace App\Helpers;

/**
 * Definition for a Node.
 */
class Node
{
    public $val = null;
    public $children = null;

    /**
     * @param $val
     */
    public function __construct($val = 0)
    {
        $this->val = $val;
        $this->children = [];
    }
}
