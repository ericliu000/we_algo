<?php

namespace algo\sword_means_offer\smo26;


use algo\tree\BinaryTree\TreeNode;

/**
 * 剑指 Offer 26. 树的子结构
 * @link https://leetcode-cn.com/problems/shu-de-zi-jie-gou-lcof/
 * @video https://www.bilibili.com/video/BV1WE411P7rc?from=search&seid=14046960413729298066&spm_id_from=333.337.0.0
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
     * @param TreeNode $A
     * @param TreeNode $B
     * @return Boolean
     */
    function isSubStructure($A, $B): bool
    {
        if ($A === null || $B === null) return false;
        // A 和 B结构相同
        // A的左子结构和
        // A的右子结构和
        // 或关系
        return $this->isSameTree($A, $B)
            || $this->isSubStructure($A->left, $B)
            || $this->isSubStructure($A->right, $B);
    }

    function isSameTree($A, $B): bool
    {
        // A 和 B结构相同？
        // 节点值 && 左 && 右都相同
        if ($B === null) return true;
        if ($A === null) return false;
        return $A->val === $B->val
            && $this->isSameTree($A->left, $B->left)
            && $this->isSameTree($A->right, $B->right);
    }
}