<?php


namespace algo\sword_means_offer\smo07;

use algo\exception\IllegalInputException;
use algo\tree\TreeNode;

class Smo07
{
    /**
     * @param $preOrder
     * @param $inOrder
     * @return TreeNode|null
     * @throws IllegalInputException
     */
    public function solve($preOrder, $inOrder): ?TreeNode
    {
        if (!is_array($preOrder) || !is_array($inOrder)) {
            return null;
        }
        if (count($preOrder) != count($inOrder)) {
            return null;
        }
        return $this->core($preOrder, $inOrder);
    }

    /**
     * @param array $preOrder
     * @param array $inOrder
     * @return TreeNode|null
     * @throws IllegalInputException
     */
    private function core(array $preOrder, array $inOrder): ?TreeNode
    {
        if (count($preOrder) === 0) {
            return null;
        }
        $rootValue = $preOrder[0];
        $node = new TreeNode($rootValue);

        $count = $this->getCount($inOrder, $rootValue);

        $node->left = $this->core(
            array_slice($preOrder, 1, $count),
            array_slice($inOrder, 0, $count)
        );
        $node->right = $this->core(
            array_slice($preOrder, $count + 1),
            array_slice($inOrder, $count + 1)
        );

        return $node;
    }

    /**
     * @param $inOrder
     * @param $value
     * @return int
     */
    private function getCount($inOrder, $value): int
    {
        $count = 0;
        while ($value !== $inOrder[$count]) {
            $count++;
        }
        return $count;
    }

    function buildTree($preorder, $inorder) {
        if (count($preorder) === 0) return null;
        $offset = array_search($preorder[0], $inorder);
        $node = new TreeNode($preorder[0]);
        $node->left = $this->buildTree(array_slice($preorder, 1, $offset), array_slice($inorder, 0, $offset));
        $node->right = $this->buildTree(array_slice($preorder, 1 + $offset), array_slice($inorder, 1 + $offset));
        return $node;
    }
}