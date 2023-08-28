<?php
class Solution
{

/**
 * @param String $s
 * @return Boolean
 */
    public function repeatedSubstringPattern($s)
    {
        $len = strlen($s);
        if ($len <= 1) {
            return false;
        }

        $repeatPos = 0;
        $step = 1;
        for ($i = 1; $i < $len; $i++) {
            $left = substr($s, 0, $i);
            $right = substr($s, $i, $step);
            if ($left == $right) {
                $repeatPos = $step;
                break;
            } else {
                $step += 1;
            }
        }
        if ($repeatPos == 0) {
            return false;
        }
        $num = 0;
        for ($i = $repeatPos; $i < $len; $i += $repeatPos) {
            $prevSubStr = substr($s, $repeatPos - $i, $repeatPos);
            $nextSubStr = substr($s, $repeatPos, $repeatPos);
            if ($nextSubStr != $prevSubStr) {
                $num += 1;
            }
        }
        return $num > 0;
    }
}
$s = "abaababaab";
// $s = "aba";
// $s = "abcabcabcabc";
// $s = "ababba";
$res = (new Solution())->repeatedSubstringPattern($s);
var_dump('res', $res);
