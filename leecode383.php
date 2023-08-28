<?php

class Solution
{

/**
 * @param String $ransomNote
 * @param String $magazine
 * @return Boolean
 */
    public function canConstruct($ransomNote, $magazine)
    {
        $len = strlen($magazine);
        for ($i = 0; $i < $len; $i++) {
            $s = $magazine[$i];
            var_dump('$magazine i:' . $i . ' s:' . $s);
            $rLen = strlen($ransomNote);
            var_dump('note---' . $ransomNote);

            for ($j = 0; $j < $rLen; $j++) {
                if ($ransomNote[$j] == $s) {
                    var_dump('$ransomNote j:' . $j . ' s:' . $ransomNote[$j]);
                    $ransomNote = substr_replace($ransomNote, '', $j, 1);
                    break;
                }
            }
        }
        var_dump($ransomNote);
        return empty($ransomNote);
    }
}
// @lc code=end
$ransomNote = "aa";
$magazine = "aab";
$res = (new Solution())->canConstruct($ransomNote, $magazine);
var_dump('res', $res);
