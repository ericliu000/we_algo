<?php

use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{

    public function provider()
    {
        return array(array('provider1'), array('provider2'));
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @dataProvider provider
     * @depends      testProducerFirst
     * @depends      testProducerSecond
     */
    public function testConsumer($provider)
    {
        $this->assertEquals(
            array($provider, 'first', 'second'),
            func_get_args()
        );
    }
}