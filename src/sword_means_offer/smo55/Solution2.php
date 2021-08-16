<?php

namespace algo\sword_means_offer\smo55;

use algo\tree\TreeNode;

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution2
{

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root)
    {
        return $this->depth($root) !== -1;
    }

    function depth($root)
    {
        if ($root === null) return 0;
        $leftDep = $this->depth($root->left);
        unset($root->left);//释放无用变量的内存
        if ($leftDep === -1) return -1;
        $rightDep = $this->depth($root->right);
        unset($root->right);
        if ($rightDep === -1) return -1;
        unset($root);
        return (abs($leftDep - $rightDep) <= 1) ? max($leftDep, $rightDep)+1 : -1;
    }
}