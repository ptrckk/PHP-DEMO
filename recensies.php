<?php include "header.php"; ?>

<div id="container">
    
    <div class="recensies">
        <div class="postsForm">
            <h2>Schrijf een recensie</h2>
            <p>Dit formulier functioneert en wordt gestuurd naar de database. De recensie wordt direct weergegeven. Daarnaast bevat dit formulier een Honeypot om bots tegen te gaan. Probeer het uit!</p><br/>
            <?php include ("modules/postsForm.php"); ?>
        </div>

        <div class="posts">
            <h2>Onze recensies</h2>
            <?php include ("modules/posts.php"); ?>
        </div>
    </div>

</div>

<?php include "footer.php"; ?>