<?php
    
    $MangPhanTu = array(1,3,5,7,9);
    function TinhTong(){
       global $MangPhanTu;
        $TongMangPT = 0;
        foreach ($MangPhanTu as $key => $value) {
            # code...
            $TongMangPT = $TongMangPT +$value;
        }
        echo  $TongMangPT;
    }
    // TinhTong();
    // echo "\n";
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
        return $MangPhanTu[0];
    }
    echo "Phan tu lon nhat trong Mang:".MaxPhanTu();
    function MinPhanTu(){
        global $MangPhanTu;
        $PhanTu_Bd = $MangPhanTu[0];
        for ($i=0; $i <count($MangPhanTu) ; $i++) { 
           
            # code...
            $PhanTuBD_Vong2 = $MangPhanTu[$i];
            if ($PhanTu_Bd>$PhanTuBD_Vong2){
                $MangPhanTu[0] = $PhanTuBD_Vong2;
            }
        }
        return $MangPhanTu[0];
    }
    echo "\nPhan tu nho nhat trong Mang:".MinPhanTu();
    

?>