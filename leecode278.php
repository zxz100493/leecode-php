<?php
/*
 * @lc app=leetcode.cn id=278 lang=php
 *
 * [278] 第一个错误的版本
 */

// @lc code=start
/* The isBadVersion API is defined in the parent class VersionControl.
public function isBadVersion($version){} */

class VersionControl
{
    public function isBadVersion($version)
    {
        if ($version >= 6) {
            return true;
        }

        return false;
    }
}

class Solution extends VersionControl
{
    /**
     * @param Int $n
     * @return Int
     */
    public function firstBadVersion($n)
    {
        $left = 1;
        $right = $n;
        while ($left < $right) {
            $mid = (int) ($left + ($right - $left) / 2);
            var_dump($mid);die;
            if ($this->isBadVersion($mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }
}
$res = (new Solution())->firstBadVersion(10);
// @lc code=end
