<?php

namespace algo\tree;

class TreeNode
{
    public int $value;
    public TreeNode|null $left;
    public TreeNode|null $right;

    public function __construct(int $value, TreeNode $left = null, TreeNode $right = null)
    {
        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }

    public function preOrderTraverse(TreeNode|null $node, &$str)
    {
        if ($node === null) {
            return;
        }
        $str .= $node->value . ' ';
        $this->preOrderTraverse($node->left, $str);
        $this->preOrderTraverse($node->right, $str);
    }
}
