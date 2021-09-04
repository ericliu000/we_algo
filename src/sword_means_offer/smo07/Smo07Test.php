<?php


namespace algo\sword_means_offer\smo07;

use algo\exception\IllegalInputException;
use algo\tree\TreeNode;
use PHPUnit\Framework\TestCase;

class Smo07Test extends TestCase
{
    public function provider(): array
    {
        $tree = new TreeNode(1,
            new TreeNode(2, new TreeNode(4, null, new TreeNode(7))),
            new TreeNode(3, new TreeNode(5), new TreeNode(6, new TreeNode(8))));
        return [
            [[1, 2, 4, 7, 3, 5, 6, 8], [4, 7, 2, 1, 5, 3, 8, 6], $tree],
        ];
    }

    /**
     * @dataProvider provider
     * @param $preOrder
     * @param $inOrder
     * @param $exp ?TreeNode
     * @throws IllegalInputException
     */
    public function testSolve($preOrder, $inOrder, $exp)
    {
        $sol = new Smo07();
        $exp->preOrderTraverse($exp, $str);
        $exp->preOrderTraverse($sol->solve($preOrder, $inOrder), $str2);
        $this->assertEquals($str, $str2);
    }

    /**
     * @dataProvider provider
     * @param $preOrder
     * @param $inOrder
     * @param $exp ?TreeNode
     */
    public function testSolve2($preOrder, $inOrder, $exp)
    {
        $sol = new Smo07();
        $exp->preOrderTraverse($exp, $str);
        $exp->preOrderTraverse($sol->buildTree($preOrder, $inOrder), $str2);
        $this->assertEquals($str, $str2);
    }
}