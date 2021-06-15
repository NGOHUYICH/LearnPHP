<?php
    echo "Chỉ là tư duy thôi, có gì nhỉ!!!. cần tư và duy trì!!!\n";
    
    ## Bài 1:
    function SoSanhHaiBang()
    {
        $Mang1 = array(1,2,3);
        $Mang2 = array(3,2,1);
        $DiemA = 0;
        $DiemB = 0;
        for ($i=0; $i <3 ; $i++) { 
            # code...
            $GiaTriMangA = $Mang1[$i];
            $GiaTriMangB = $Mang2[$i];
            $SuChenhLech = $GiaTriMangA-$GiaTriMangB ;
            if($SuChenhLech>0){
                $DiemA = $DiemA +1;
            }else{
                    if ($SuChenhLech==0){
                        $DiemB = $DiemB;
                        $DiemA = $DiemA;
                    }else{
                        $DiemB = $DiemB+1;
                    }
            }
        }
        echo "Điểm Người A: ".$DiemA." | "."Điểm Người B: ".$DiemB;
    }
    SoSanhHaiBang();
    echo "\n";

     #Bài 2
    function TimCacSoCaoNhat(){
        $MangBai2 = array(4,4,2,1);
        for ($i=0; $i <4 ; $i++) { 
            # code...
            $SoBanDau = $MangBai2[0];
            if($SoBanDau<$MangBai2[$i]){
                $SoBanDau = $MangBai2[$i];
            }
        }
        $SoCaoNhat = $SoBanDau;
        $DiemSoCaoNhat = 1;
        for ($i=1; $i <4 ; $i++) { 
            # code...
        if($SoCaoNhat == $MangBai2[$i]){
            $DiemSoCaoNhat = $DiemSoCaoNhat +1;
        }
        }
        echo "Tổng số, số cao nhất trong dãy : ".$DiemSoCaoNhat;
    }
    TimCacSoCaoNhat();
    echo "\n";
    function TinhSoVongGapNhau(){
        #Bài 3
        $MocA = 0;
        $MocB = 4;
        $TocDoA = 3;
        $TocDoB = 2;
        $TinhTienA =$MocA +$TocDoA;
        $TinhTienB = $MocB + $TocDoB;
        $SoVongQuay =  0;
        while($TinhTienA - $TinhTienB)
        {
            $TinhTienA = $TinhTienA + $TocDoA;
            $TinhTienB = $TinhTienB + $TocDoB;
            $SoVongQuay = $SoVongQuay +1;
            if(($TinhTienA - $TinhTienB)==0){
                break;
            }
        }
        return $SoVongQuay;
    }
    echo "Số vòng để hai điểm gặp nhau là : ".TinhSoVongGapNhau();
   
   
    





?>