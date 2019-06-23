<?php 

if($_POST){
    $honeypot = $_POST['website'];
    // Controller of Honeypot is ingevuld, zo ja, redirect naar 404.
    if(!empty($honeypot)){
        header("Location: 404.php");
        exit;
    }
}

?>