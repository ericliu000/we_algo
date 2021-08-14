<?php


namespace sword_means_offer;

use algo\linked_list\Node;
use algo\sword_means_offer\Smo06;
use PHPUnit\Framework\TestCase;

class Smo06Test extends TestCase
{
    public function provider(): array
    {
        $head = new Node(3, new Node(2, new Node(1, new Node(0))));
        $exp = new Node(0, new Node(1, new Node(2, new Node(3))));
        return [
            [$head, $exp]
        ];
    }

    /**
     * @dataProvider provider
     * @param $head
     * @param $exp
     */
    public function testSolve($head, $exp)
    {
        $sol = new Smo06();
        $this->assertEquals($exp, $sol->solve($head));
    }
}