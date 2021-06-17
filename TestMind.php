<?php
    echo "Chỉ là tư duy thôi, có gì nhỉ!!!. cần tư và duy trì!!!\n";
    
    # Bài 1:
    // function SoSanhHaiBang()
    // {
    //     $Mang1 = array(1,2,3);
    //     $Mang2 = array(3,2,1);
    //     $DiemA = 0;
    //     $DiemB = 0;
    //     for ($i=0; $i <3 ; $i++) { 
    //         # code...
    //         $GiaTriMangA = $Mang1[$i];
    //         $GiaTriMangB = $Mang2[$i];
    //         $SuChenhLech = $GiaTriMangA-$GiaTriMangB ;
    //         if($SuChenhLech>0){
    //             $DiemA = $DiemA +1;
    //         }else{
    //             if ($SuChenhLech<>0){
    //                 $DiemB = $DiemB+1;
    //             }
    //         }
    //     }
    //     echo "Điểm Người A: ".$DiemA." | "."Điểm Người B: ".$DiemB;
    // }
    // SoSanhHaiBang();
    // echo "\n";

     #Bài 2
    function TimCacSoCaoNhat(){
        $MangBai2 = array(12,29,22,21,30,31,29,21,30,19,29,31,30);
       // $MangBai2 = array(4,5,2,4);
        $MangAutoBai2 = array();
        $SoBanDau = $MangBai2[0];
        $Dem = 0;
        for ($i=1; $i <count($MangBai2) ; $i++) { 
            # code...
            if($SoBanDau<$MangBai2[$i]){
                $SoBanDau = $MangBai2[$i];
                $Dem = 0;
            }
            if($SoBanDau == $MangBai2[$i]){
                $Dem += 1;
                $MangAutoBai2[$SoBanDau]= $Dem;
            }
            if($i == count($MangBai2)-1 and $SoBanDau == $MangBai2[0]){
                $MangAutoBai2[$SoBanDau] = 1;
            }
        }
       // echo "Tổng số, số cao nhất trong dãy : ".$Dem;
       var_dump($MangAutoBai2);
       echo $MangAutoBai2[$SoBanDau];
    }
    TimCacSoCaoNhat();
    echo "\n";

    // $SoVongQuay =  0;
    // function TinhSoVongGapNhau(){
    //     #Bài 3
    //     $MocA = 1;
    //     $MocB = 4;
    //     $TocDoA = 2;
    //     $TocDoB = 3;
    //     $TinhTienA =$MocA +$TocDoA;
    //     $TinhTienB = $MocB + $TocDoB;
    //     global $SoVongQuay;
        
    //     do{
    //         $SoVongQuay = $SoVongQuay +1;
    //         $TrangThai = 1;
    //         if(($TinhTienA - $TinhTienB)!=0){
    //             $TinhTienA = $TinhTienA + $TocDoA;
    //             $TinhTienB = $TinhTienB + $TocDoB;
    //             $TrangThai = 1;
    //         }else{
    //             return "1";
    //             $TrangThai = 0;
    //         }
    //         echo $TinhTienB." ";
    //     }while($SoVongQuay<10);
        
    // }
    // TinhSoVongGapNhau();
   
   
    





?>