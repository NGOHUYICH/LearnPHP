<?php
    // session_start();
    // setcookie("MaIT","NGO HUY ICH",time()+180,"/");
    $_SESSION["Ngon Ngu"] = "PHP";
    $_SESSION["Tien Trinh"]= "Sheet2";

    echo $_SESSION["Ngon Ngu"];
    echo "\n";
    $_COOKIE["Gioi Han"] = "4 tieng";

    echo $_COOKIE['Gioi Han'];


?>