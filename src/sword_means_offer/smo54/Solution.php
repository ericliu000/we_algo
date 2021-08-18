<?php

namespace algo\sword_means_offer\smo54;

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
     * 剑指 Offer 54. 二叉搜索树的第k大节点
     * @link https://leetcode-cn.com/problems/er-cha-sou-suo-shu-de-di-kda-jie-dian-lcof/
     * @video https://www.bilibili.com/video/BV1GQ4y1M72Q?from=search&seid=14759674919060294985
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthLargest($root, $k) {
        $this->inorder($root, $list);
        return $list[count($list)-$k];
    }

    function inorder($root, &$list) {
        if ($root === null) return null;
        $this->inorder($root->left, $list);
        $list[] = $root->val;
        $this->inorder($root->right, $list);
    }
}