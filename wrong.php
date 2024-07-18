<?php
session_start();

if(isset($_GET["error"])&& $_GET["error"]==1){
    header("location:wrongusername.html");
}elseif(isset($_GET["error"])&& $_GET["error"]==2)
{
    header("location:wrongpassword.html");
}else{
    header("location:index.html");
}


?>