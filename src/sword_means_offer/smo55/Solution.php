<?php

namespace algo\sword_means_offer\smo55;

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * 剑指 Offer 55 - I. 二叉树的深度
     * @link https://leetcode-cn.com/problems/er-cha-shu-de-shen-du-lcof/
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if ($root == null) return 0;
        $leftDep = $this->maxDepth($root->left);
        $rightDep = $this->maxDepth($root->right);
        return $leftDep > $rightDep ? $leftDep + 1 : $rightDep + 1;
    }
}