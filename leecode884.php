<?php
/*
 * @lc app=leetcode.cn id=884 lang=php
 *
 * [884] 两句话中的不常见单词
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    public function uncommonFromSentences($s1, $s2)
    {
        $s1 = explode(' ', $s1);
        $s2 = explode(' ', $s2);
        $c = [];
        foreach ($s1 as $v) {
            $c[$v] = empty($c[$v]) ? 1 : $c[$v] + 1;
        }
        foreach ($s2 as $v) {
            $c[$v] = empty($c[$v]) ? 1 : $c[$v] + 1;
        }
        $tmp = [];
        foreach ($c as $k => $v) {
            if ($v == 1) {
                $tmp[] = $k;
            }
        }
        return $tmp;
    }
}
$s1 = "abcd def abcd xyz";
$s2 = "ijk def ijk";

$res = (new Solution())->uncommonFromSentences($s1, $s2);
var_dump($res);die;
// @lc code=end
