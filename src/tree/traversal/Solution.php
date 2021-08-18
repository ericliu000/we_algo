<?php

namespace algo\tree\traversal;


/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    private $res = [];

    /**
     * 递归实现
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        if ($root === null) return [];
        $this->res[] = $root->val;
        $this->preorderTraversal($root->left);
        $this->preorderTraversal($root->right);
        return $this->res;
    }

    /**
     * 递归实现
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        if ($root === null) return [];
        $this->inorderTraversal($root->left);
        $this->res[] = $root->val;
        $this->inorderTraversal($root->right);
        return $this->res;
    }

    /**
     * 递归实现
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root) {
        if ($root === null) return [];
        $this->postorderTraversal($root->left);
        $this->postorderTraversal($root->right);
        $this->res[] = $root->val;
        return $this->res;
    }
}