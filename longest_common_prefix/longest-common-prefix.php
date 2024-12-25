<?php


class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
      if(empty($strs))
        return "";


      $firstIndex = $strs[0];

      for($i = 1; $i < count($strs);$i++)
      {
        while(strpos($strs[$i],$firstIndex) !== 0)
        {
          $firstIndex = substr($firstIndex,0,-1);

            if($firstIndex === "")
            {
              return "";
            }
        }
      }
      return $firstIndex;
    }
}

$Solution = new Solution;
echo $Solution->longestCommonPrefix(["flower", "flow", "flight"]);

?>
