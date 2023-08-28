<?php
/*
 * @lc app=leetcode.cn id=20 lang=php
 *
 * [20] 有效的括号
 */

// @lc code=start
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s)
    {
        $len = strlen($s);
        if ($len <= 1) {
            return false;
        }
        // $stackStr = ['(', ')', '[', ']', '{', '}'];
        $tmp = [];
        for ($i = 0; $i < $len; $i++) {
            $str = $s[$i];
            if ($str == '(') {
                array_push($tmp, ')');
            } else if ($str == '[') {
                array_push($tmp, ']');
            } else if ($str == '{') {
                array_push($tmp, '}');
            } else if (empty($tmp) || array_pop($tmp) != $str) {
                return false;
            }
        }
        return true;
    }
}
// @lc code=end
$s = "([)]";
$res = (new Solution())->isValid($s);
var_dump($s);
var_dump($res);
