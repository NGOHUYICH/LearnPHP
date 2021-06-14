<?php
    
    
    function TinhTong(){
        $MangPhanTu = array(1,3,5,7,9);
        $TongMangPT = 0;
        foreach ($MangPhanTu as $key => $value) {
            # code...
            $TongMangPT = $TongMangPT +$value;
        }
        echo  $TongMangPT;
    }
   // TinhTong();
   function MaxPhanTu(){
        $MangPhanTu = array(1,3,5,7,9);
        $PhanTu_Bd = $MangPhanTu[0];
        for ($i=0; $i <count($MangPhanTu) ; $i++) { 
           
            # code...
            $PhanTuBD_Vong1 = $MangPhanTu[$i];
            if ($PhanTu_Bd<$PhanTuBD_Vong1){
                $MangPhanTu[0] = $PhanTuBD_Vong1;
            }
        }
        echo $MangPhanTu[0];
    }
    // MaxPhanTu();
    function MinPhanTu(){
        $MangPhanTu = array(1,3,5,7,9);
        $PhanTu_Bd = $MangPhanTu[0];
        for ($i=0; $i <count($MangPhanTu) ; $i++) { 
           
            # code...
            $PhanTuBD_Vong2 = $MangPhanTu[$i];
            if ($PhanTu_Bd>$PhanTuBD_Vong2){
                $MangPhanTu[0] = $PhanTuBD_Vong2;
            }
        }
        echo $MangPhanTu[0];
    }
    // MinPhanTu()
    

?>