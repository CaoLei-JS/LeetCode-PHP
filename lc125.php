<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $s = strtolower($s);
        $length = strlen($s);
        $result = [];
        echo $s;
        for ($i = 0; $i < $length; $i++) {
            if (($s[$i] >= 'a' && $s[$i] <= 'z')||(ord($s[$i])>=48 &&ord($s[$i])<=57)) {
                $result[] = $s[$i];
            } else {
                continue;
            }
        }
        print_r($result);
        $flag = true;
        $arrLen = count($result);
        for ($i = 0; $i < floor($arrLen / 2); $i++) {
            if ($result[$i] != $result[$arrLen - 1 - $i]) {
                $flag = false;
                break;
            }
        }
        return $flag;

    }
}

(new Solution())->isPalindrome("0P");