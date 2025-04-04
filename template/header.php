<?php
session_start();
if (isset($_SESSION['Active']) && $_SESSION['Active'] == true){
    //Do nothing
}
else{
    if ($_SERVER['PHP_SELF'] != '/login.php' && basename($_SERVER['PHP_SELF']) != 'login.php'){
        header("Location: login.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">