<?php
class Solution {

    /**
     * @param Int[] $nums
     * @param Int $target
     * @return Int[]
     */
    function twoSum($nums, $target) {
        $num_new = [];

        foreach($nums as $key => $num)
        {
            $comp = $target - $num;

            if(isset($num_new[$comp]))
                return [$num_new[$comp], $key];
            $num_new[$num] = $key;
        }
        return [];
    }
}
?>