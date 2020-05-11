<?php

class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $result = 0;
        $length = count($prices);
        for ($i = 0; $i < $length - 1; $i++) {
            $result += ($prices[$i] < $prices[$i + 1]) ? ($prices[$i + 1] - $prices[$i]) : 0;
        }
        return $result;
    }
}