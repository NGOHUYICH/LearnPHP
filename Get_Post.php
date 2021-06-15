<?php

  $Get_Name = $_GET['txtName'];
  $Get_SDT = $_GET['txtPhone'];
  $Post_MaNTD = $_POST['txtMaNTD'];
  $Post_TienGuiNTD = $_POST['txtSoTienNTD'];


  echo "Chúc mừng bạn : "."<strong>".$Get_Name."</strong>";
  echo "<br>";
  echo "Chúng tôi sẽ liên hệ lại với bạn qua SDT của bạn là : "
        ."<strong>".$Get_SDT."</strong>";
  echo "<br>";
  echo "<h1> Nhà tuyển dụng : </h1>".$Post_MaNTD." gửi số tiền :".$Post_TienGuiNTD;
  



?>