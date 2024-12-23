<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $Roaming = array(
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        );
    
        $result = 0;
    
        for ($i = 0; $i < strlen($s); $i++) {
            if ($i > 0 && $Roaming[$s[$i]] > $Roaming[$s[$i - 1]]) {
                $result += $Roaming[$s[$i]] - 2 * $Roaming[$s[$i - 1]];
            } else {
                $result += $Roaming[$s[$i]];
            }
        }
        return $result;
    }
    }

$solution = new Solution();
echo $solution->romanToInt("III");
echo '<br>';
echo $solution->romanToInt("IV");
?>