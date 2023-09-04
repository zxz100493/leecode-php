<?php

class Solution
{

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
    public function intersection($nums1, $nums2)
    {
        $c = [];
        foreach ($nums1 as $v) {
            foreach ($nums2 as $vv) {
                if ($vv == $v) {
                    $c[$v] = 1;
                }
            }
        }
        return array_keys($c);
    }
}
