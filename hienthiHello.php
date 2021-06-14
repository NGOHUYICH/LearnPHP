<?php 
    
    // Biến, hằng
    define ("HovaTen","NGÔ HUY ICH");
    echo(HovaTen."<br/>");
    echo("Tao bực mình vs vscode rồi !!!</br>");
    
    // if .. else ; switch case
    $Zero = "Web";
    $Huong1 = "Web Developer";
    $Huong2 = "Mobile Developer";
    if(str_replace($Zero,$Zero,$Huong1) ==$Huong1){
        echo "Định hướng tương lại của bạn là Web <br/>";
    }else{
        echo "Định hướng tương lại của bạn là App <br/>";
    }
    $DiemsoA = 8;
    switch($DiemsoA){
        case $DiemsoA >6.5 and $DiemsoA<8:
            echo "Học sinh Khá";
        case $DiemsoA >=8:
            echo "Học sinh Giỏi";
        break;
        default :
            echo "Học sinh cần cải thiện học tập";
    }

    // Các dạng Mảng
    echo "<br/>";
    $Infor_NV = array("NGÔ HUY ICH","1996","PHU XUYEN - HA NOI");

    echo "Phan tu thu 1 từ Infor Nhân viên ".$Infor_NV[0]."<br/>";
    echo "Phan tu thu 2 từ Infor Nhân viên ".$Infor_NV[2]."<br/>";
    
    echo "<br/>";
    $Ngonngu_Laptrinh = array("Web"=>"PHP","App"=>"Android","AI"=>"Python");
    echo "Trí tuệ nhân tạo : ".$Ngonngu_Laptrinh["AI"];

    $QuanlyGmail = array(
        array("Name"=>"Huy Ich" ,"Gmail"=>"ngoich08@gmail.com"),
        array("Name"=>"Thien Tan","Gmail"=>"thientan@gmail.com"),
        array("Name"=>"Quoc Ngoc","Gmail.com"=>"quocngoccntt@gmai.com"),
    );
    echo "<br/>";
    print_r ($QuanlyGmail[0]["Gmail"]);

 ?>