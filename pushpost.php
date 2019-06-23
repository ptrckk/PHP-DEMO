<?php

// Honeypot tegen spam door bots in Form
include "modules/honeypot.php";

// Maak verbinding met de database via connection.php
include 'db/connection.php';

if(isset($_POST['submit'])) {

    // Maak variabel aan met value van input vanuit form
    $inputTitle=$_POST['inputTitle'];
    $inputContent=$_POST['inputContent'];
    
    // Voeg row toe aan de database
    $query = "INSERT INTO post (title, content)
    VALUES ('$inputTitle', '$inputContent')";
    
    // Foutmelding als er geen verbinding met database gemaakt kan worden
    if (!mysqli_query($conn, $query)) {
        die('Er kon geen verbinding gemaakt worden met de database. Je bericht is niet geplaatst.');
    } else {
        // Als bericht plaatsen lukt, refresh direct naar index.php
        header("Refresh:0; url=recensies.php");
    }
}
?>

<?php 



?>