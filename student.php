<?php
    $NameFile = "HocSinh.txt";
    
    function GhiThongTinStudent(){
        global $NameFile;
        if(is_file($NameFile)){
            $Student= array(
                array(
                    "Hoten" => "NGO BAO CHAU",
                    "Tuoi" => "6"
                ),
                array(
                    "Hoten" => "NGO HONG HAI",
                    "Tuoi" => "27"
                ),
                array(
                    "Hoten" => "NGO SI LONG",
                    "Tuoi" => "29"
                ),
                array(
                    "Hoten" => "NGO QUOC NGOC",
                    "Tuoi" => "29"
                )
            );
            //echo $Student[0]["Hoten"];
            $OpenFile = fopen($NameFile,"w");
            for ($i=0; $i <4 ; $i++) { 
                # code...
                $HoTen = $Student[$i]["Hoten"]." | ".$Student[$i]["Tuoi"]."\n";
                echo $HoTen;
                $WriteTextFile = fwrite($OpenFile,$HoTen);
            }
            return $WriteTextFile;
            fclose($OpenFile);
        }else{
            echo "file khong ton tai";
        }
    }
    function DocThongTinStudent(){  
        global $NameFile;  
        if(is_file($NameFile)){
            
            $OpenFile = fopen($NameFile,"r++");
            $ReadFile = fread($OpenFile,"1000");
            $ConvertArray = explode(" | ",$ReadFile);
            fclose($OpenFile);
            return var_dump($ConvertArray);
        }else{
            echo "File chua ton tai";
        }
    }
    
    
?>