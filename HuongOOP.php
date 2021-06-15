<?php
    class NgheLapTrinh{

        public $SoThich ="" ;
        public $TaiNang = "";

        public function TinhTongHaiSo($a,$b){
            return $a+$b;
        }
    }
    class WebDeveloper extends NgheLapTrinh{
        public $NgonNguThanhThao ="";
        public static $PhongCachTuDuy = "Phan tich, code sach";
    }

    $object1 = new NgheLapTrinh;
    echo $object1->SoThich = "Bong da\n";
    echo $object1 ->TaiNang = "Code Developer\n";
    echo $object1->TinhTongHaiSo(3,4);
    echo "\n";
    
    $object2 = new WebDeveloper;
    echo $object2::$PhongCachTuDuy;
    // echo $object2::;
    echo $object2->NgonNguThanhThao ="PHP";

?>