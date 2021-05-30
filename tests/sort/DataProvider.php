<?php


namespace algo\test;


class DataProvider
{
    public static function data()
    {
        return [
            [[6, 4, 2, 3, 1, 5], [1, 2, 3, 4, 5, 6]],
            [[4, 5, 6, 3, 1, 2], [1, 2, 3, 4, 5, 6]],
            [[6, 5], [5, 6]],
            [[1, 2, 3, 4, 5, 6, 7, 8], [1, 2, 3, 4, 5, 6, 7, 8]],
            [[], []],
            [[1], [1]],
        ];
    }
}
