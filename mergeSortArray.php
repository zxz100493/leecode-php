<?php

/*
 * @lc app=leetcode.cn id=88 lang=php
 *
 * [88] 合并两个有序数组
 */

// @lc code=start
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Int $m
     * @param Integer[] $nums2
     * @param Int $n
     * @return NULL
     */
    public function merge(&$nums1, $m, $nums2, $n)
    {

        // while ($n > 0) {
        //     if ($nums1[$m - 1] > $nums2[$n - 1]) {
        //         $nums1[$m + $n - 1] = $nums1[$m - 1];
        //         $m--;
        //     } else {
        //         $nums1[$m + $n - 1] = $nums2[$n - 1];
        //         $n--;
        //     }
        // }
        // return $nums1;
        $p1 = $p2 = 0;
        $sorted = [];
        $target = 0;
        while ($p1 < $m || $p2 < $n) {
            if ($p1 == $m) {
                $target = $nums2[$p2++];
            } else if ($p2 == $n) {
                $target = $nums1[$p1++];
            } else if ($nums1[$p1] < $nums2[$p2]) {
                $target = $nums1[$p1++];
            } else {
                $target = $nums2[$p2++];
            }

            $sorted[$p1 + $p2 - 1] = $target;
        }
        for ($i = 0; $i != $m + $n; $i++) {
            $nums1[$i] = $sorted[$i];
        }
        return $nums1;
    }
}
$num = [1];
$tmp = (new Solution)->merge($num, 1, [], 0);
var_dump($tmp);
// @lc code=end
