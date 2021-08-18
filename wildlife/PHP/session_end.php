<?php
session_start();

if($_SESSION['login']=='no'){
    session_unset();
    session_destroy();
    header("refresh:0; url=../html/login.html");
    
}
else{
session_unset();
session_destroy();
echo "Logged Out Sucessfully!!";
header("refresh:2; url=../html/login.html");
}
?>