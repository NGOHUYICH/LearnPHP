<?php
    $TenFile = "FileNhe.txt";
    if(is_file($TenFile)){
        //Đọc File
        $MoFile = fopen($TenFile,"r++");
        $DocFile =fread($MoFile,filesize($TenFile));
        $DongFile = fclose($MoFile);
        // echo $DocFile;
        //Ghi File
        $NoiDungGhi = " NGO BAO CHAU";
        $MoDeGhi = fopen($TenFile,"a");
        $GhiFile = fwrite($MoDeGhi,$NoiDungGhi);
        $DongFileGhi = fclose($MoDeGhi);
        //  echo $GhiFile;

    }else{
        echo "Chua co file nay nhe";
    }
   


?>