<?php

namespace algo\heap;

class SimpleHeap
{
    /**
     * php内置的优先队列使用大顶堆实现的
     * https://www.cnblogs.com/Renyi-Fan/p/9103176.html
     */
    function spq()
    {
        $pq = new \SplPriorityQueue();
        $pq->insert('a', 10);
        $pq->insert('b', 1);
        $pq->insert('c', 8);

        echo $pq->count() . PHP_EOL; //3
        echo $pq->current() . PHP_EOL; //a
    }

    function maxHeap() {
        $h = new \SplMaxHeap();
    }

}