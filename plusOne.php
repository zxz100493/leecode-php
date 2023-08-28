<?php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    public function plusOne($digits)
    {
        $max = count($digits);
        $next = null;
        var_dump($max, 'max');
        for ($i = $max - 1; $i >= 0; $i--) {
            if ($next === 0) {
                break;
            }
            $digits[$i] += 1;
            if ($digits[$i] <= 9) {
                $next = 0;
                break;
            } else {
                $digits[$i] = 0;
                $next = 1;
            }
            if ($i == 0 && $digits[$i] == 0) {
                array_unshift($digits, 1);
            }
        }
        return $digits;
    }
}
$tmp = (new Solution)->plusOne([9, 9]);
var_dump($tmp);
