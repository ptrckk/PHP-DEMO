<form method="post" action="pushpost.php">  
    <h4>Uw naam <abbr title="This field is mandatory">*</abbr><br /></h4>
        <input id="formtext" type="text" name="inputTitle" required name="title" value="<?php echo $inputTitle;?>"> <br />

    <h4>Uw bericht <abbr title="This field is mandatory">*</abbr><br /></h4>
        <textarea id="formarea" name="inputContent" required name="title" rows="4" maxlength="255"><?php echo $inputContent;?></textarea>
        <div id="textarea_message"></div><br />

    <!-- Honeypot, wordt niet weergegeven en functioneert alleen tegen spam/bots -->
    <input name="website" type="text" id="website" class="honeypot">

    <input type="submit" name="submit" value="Verzenden" class="btn"> 
</form>