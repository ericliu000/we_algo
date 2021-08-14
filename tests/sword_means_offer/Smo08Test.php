<?php


namespace sword_means_offer;

use algo\exception\IllegalInputException;
use algo\sword_means_offer\Smo08;
use algo\tree\TreeNode;
use PHPUnit\Framework\TestCase;

class Smo08Test extends TestCase
{
    public function provider(): array
    {
        $node8 = new TreeNode(8);
        $node6 = new TreeNode(6);
        $node10 = new TreeNode(10);
        $node5 = new TreeNode(5);
        $node3 = new TreeNode(3);
        $node5_2 = new TreeNode(5);
        $node2 = new TreeNode(2);

        $node8->left = new TreeNode(6);
        $tree = new TreeNode(2);
        return [
            [[1, 2, 4, 7, 3, 5, 6, 8], [4, 7, 2, 1, 5, 3, 8, 6], $tree],
        ];
    }

    /**
     * @dataProvider provider
     * @param $preOrder
     * @param $inOrder
     * @param $exp TreeNode|null
     * @throws IllegalInputException
     */
    public function testSolve($preOrder, $inOrder, $exp)
    {
        $sol = new Smo08();//todo没有做完
        $this->assertEquals($str, $str2);
    }
}