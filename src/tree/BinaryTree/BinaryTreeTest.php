<?php

namespace algo\tree\BinaryTree;

use PHPUnit\Framework\TestCase;

class BinaryTreeTest extends TestCase
{
    private function makeTree(): TreeNode
    {
        $node9 = new TreeNode(9);
        $node8 = new TreeNode(8);
        $node6 = new TreeNode(6, $node8, $node9);
        $node3 = new TreeNode(3, null, $node6);
        $node2 = new TreeNode(2, new TreeNode(4), new TreeNode(5, new TreeNode(7)));
        return new TreeNode(1, $node2, $node3);
    }

    public function provider(): array
    {

        return [
            [$this->makeTree(), [1, 2, 3, 4, 5, 6, 7, 8, 9]],
            [null, []],
        ];
    }

    public function provider1(): array
    {
        return [
            [$this->makeTree(), [[1], [2, 3], [4, 5, 6], [7, 8, 9]]],
            [null, []],
        ];
    }

    /**
     * @dataProvider provider
     * @param TreeNode|null $treeNode
     * @param $exp
     */
    public function testBfs(?TreeNode $treeNode, $exp)
    {
        $this->assertEquals($exp, (new BinaryTree())->bfs($treeNode));
    }

    /**
     * @dataProvider provider1
     * @param TreeNode|null $treeNode
     * @param $exp
     */
    public function testLevelOrder(?TreeNode $treeNode, $exp)
    {
        $this->assertEquals($exp, (new BinaryTree())->levelOrder($treeNode));
    }
}
