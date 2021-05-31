<?php
@session_start();
$User="";
if(isset($_SESSION["UserIn"])) $User=$_SESSION["UserIn"];
echo $User;
?>