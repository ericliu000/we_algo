<?php


namespace algo\test;

use PHPUnit\Framework\TestCase;

/**
 * @link 单元测试示例 https://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html
 */
class DataTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }

    public function provider(): array
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2)
        );
    }
}