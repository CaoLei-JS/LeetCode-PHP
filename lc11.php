<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $length = $m + $n;
        while ($n > 0) {
            $nums1[--$length] = (($m > 0) && ($nums1[$m - 1] > $nums2[$n - 1])) ?
                 $nums1[--$m] : $nums2[--$n];
        }
    }
}

$nums1 = [1, 2, 3, 0, 0, 0];
$nums2 = [2, 5, 6];
$m = $n = 3;
(new Solution())->merge($nums1, $m, $nums2, $n);
print_r($nums1);