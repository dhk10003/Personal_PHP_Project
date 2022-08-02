<?php

    $LiftNum = $_POST['LiftNum'];
    $RepNum = $_POST['RepNum'];

    if ($RepNum == 1) {
        $Result = $LiftNum;
        return $Result;
      }else {
        $Result = $LiftNum * (1 + $RepNum/30);
        return $Result;
      }
    
class Calculator
{
    function Your_Rm(){

        $LiftNum = $_POST['LiftNum'];
        $RepNum = $_POST['RepNum'];
        
        if ($RepNum == 1) {
          $Result = $LiftNum;
          echo '<h2>Your One Rep Max is: ' .round($Result,2). 'lb.</h2>';
        }else {
          $Result = $LiftNum * (1 + $RepNum/30);
          echo '<h2>Your One Rep Max is about: ' .round($Result,2). 'lb.</h2>';
        }

    }
}
?>