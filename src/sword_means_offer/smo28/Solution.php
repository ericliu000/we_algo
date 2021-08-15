<?php

namespace algo\sword_means_offer\smo28;

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
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        return $root === null ? true : $this->recur($root->left, $root->right);
    }
    function recur(?TreeNode $L, ?TreeNode $R) {
        if ($L === null && $R === null) return true;
        if ($L === null || $R === null || $L->val !== $R->val) return false;
        return $this->recur($L->left, $R->right) && $this->recur($R->left, $L->right);
    }
}