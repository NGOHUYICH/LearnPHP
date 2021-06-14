<?php
     $DaySo = array(1,2,3,4,5,6,7);
     $TongDaySo = 0;
    for ($i=0; $i <count($DaySo) ; $i++) { 
        $TongDaySo = $TongDaySo + $DaySo[$i];
    }
     echo($TongDaySo);
     
?>