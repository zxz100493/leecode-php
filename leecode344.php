<?php
class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    public function reverseString(&$s)
    {
        $len2 = $len = count($s);
        for ($i = 0; $i < $len / 2; $i++) {
            $ori = $s[$i];
            $s[$i] = $s[$len2 - 1];
            $s[$len2 - 1] = $ori;
            $len2--;
        }
    }
}
$s = ["h", "e", "l", "l", "o"];
(new Solution())->reverseString($s);
var_dump('res', $s);
