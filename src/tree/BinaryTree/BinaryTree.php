<?php

namespace algo\tree\BinaryTree;

use algo\queue\ArrayQueue;

class BinaryTree
{

    private $res = [];

    /**
     * 递归实现:前序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root)
    {
        if ($root === null) return [];
        $this->res[] = $root->val;
        $this->preorderTraversal($root->left);
        $this->preorderTraversal($root->right);
        return $this->res;
    }

    /**
     * 递归实现：中序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root)
    {
        if ($root === null) return [];
        $this->inorderTraversal($root->left);
        $this->res[] = $root->val;
        $this->inorderTraversal($root->right);
        return $this->res;
    }

    /**
     * 递归实现：后序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root)
    {
        if ($root === null) return [];
        $this->postorderTraversal($root->left);
        $this->postorderTraversal($root->right);
        $this->res[] = $root->val;
        return $this->res;
    }

    /**
     * 广度优先遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function bfs($root)
    {
        if ($root === null) return [];
        $queue = new ArrayQueue();
        $res = [];
        $queue->enqueue($root);
        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            $res[] = $node->val;
            if ($node->left !== null) {
                $queue->enqueue($node->left);
            }
            if ($node->right !== null) {
                $queue->enqueue($node->right);
            }
        }
        return $res;
    }

    /**
     * 层序遍历
     * @param TreeNode $root
     * @return Integer[]
     */
    function levelOrder($root)
    {
        if ($root === null) return [];
        $queue = new ArrayQueue();
        $res = [];
        $queue->enqueue($root);
        while (!$queue->isEmpty()) {
            $n = $queue->getSize();
            $level = [];
            for ($i = 0; $i < $n; $i++) {
                $node = $queue->dequeue();
                $level[] = $node->val;
                if ($node->left !== null) {
                    $queue->enqueue($node->left);
                }
                if ($node->right !== null) {
                    $queue->enqueue($node->right);
                }
            }
            $res[] = $level;
        }
        return $res;
    }


    private int $maxDepth = 0;

    /**
     * “自顶向下” 的解决方案
     * @param TreeNode|null $root
     * @return int
     */
    function maxDepth(?TreeNode $root): int
    {
        if ($root === null) return 0;
        $this->maxDepthHelper($root, 1);
        return $this->maxDepth;
    }
    private function maxDepthHelper(?TreeNode $root, int $depth): void
    {
        if ($root === null) {
            return;
        }
        if ($root->left === null && $root->right === null) {
            $this->maxDepth = max($this->maxDepth, $depth);
        }
        $this->maxDepthHelper($root->left, $depth + 1);
        $this->maxDepthHelper($root->right, $depth + 1);
    }

    function maxDepth2(?TreeNode $root) {
        if ($root === null) return 0;
        $leftDepth = $this->maxDepth2($root->left);
        $rightDepth = $this->maxDepth2($root->right);
        return max($leftDepth, $rightDepth) + 1;
    }
}