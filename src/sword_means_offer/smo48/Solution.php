<?php

namespace algo\sword_means_offer\smo48;

class Solution {

    /**
     * 剑指 Offer 48. 最长不含重复字符的子字符串
     * @link https://leetcode-cn.com/problems/zui-chang-bu-han-zhong-fu-zi-fu-de-zi-zi-fu-chuan-lcof/submissions/
     * @video https://www.bilibili.com/video/BV1va4y1J7Gx?from=search&seid=3085425684074862592&spm_id_from=333.337.0.0
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $maxLen = 0;
        $start = 0;
        $set = [];
        for($end=0; $end<strlen($s); $end++) {
            while(in_array($s[$end], $set)) {
                array_shift($set);
                $start++;
            }
            array_push($set, $s[$end]);
            $maxLen = max($maxLen, $end - $start + 1);
        }
        return $maxLen;
    }

    //优化：存储最后一次出现位置
    function lengthOfLongestSubstring2($s) {
        $maxLen = 0;
        $start = 0;
        $map = [];
        for($end=0; $end<strlen($s); $end++) {
            if (isset($map[$s[$end]]) && $map[$s[$end]] >= $start) {
                $start = $map[$s[$end]] + 1;
                //unset($map[$s[$end]]);//由于后面立马覆盖，所以无需删除
            }
            $map[$s[$end]] = $end;
            $maxLen = max($maxLen, $end - $start + 1);
        }
        return $maxLen;
    }
}