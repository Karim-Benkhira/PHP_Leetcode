<?php
class Solution {

    /**
     * @param Int $x
     * @return Bool
     */
    function isPalindrome($x) {
        if($x < 0)
            return false;

        $origin = $x;
        $rev = 0;

        while($x > 0){
            $rev = $rev * 10 +$x %10;
            $x = (int)($x / 10);
        }
        return $origin == $rev;
    }
}

$solution = new Solution();
echo $solution->isPalindrome(121) ? 'true' : 'false';
echo "<br>";
echo $solution->isPalindrome(-121) ? 'true' : 'false';
echo "<br>";
echo $solution->isPalindrome(10) ? 'true' : 'false';
echo "<br>";
echo $solution->isPalindrome(12321) ? 'true' : 'false';
echo "<br>";
echo $solution->isPalindrome(0) ? 'true' : 'false';
?>