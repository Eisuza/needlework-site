
    <div class="caption"><?=$formelements['feedback_slogan']?></div>
    <div class="feedback">
        <?=$formelements['owners_name']?><br>
        <?=$formelements['owners_phone']?><br>
        <?=$formelements['owners_email']?><br>
        <?=$formelements['owners_post']?>
    </div>

    <div class="caption"><?=$formelements['form_title']?></div>          
    <form action = "send.php" method = "post" class="feedback">
        <br>
        <label for = "senderName"><?=$formelements['first_field_title']?></label>
        <input id = "senderName"  name = "name" type = "text" placeholder="<?=$formelements['placeholder1']?>" required><br><br>
        <label for = "senderEmail"><?=$formelements['second_field_title']?></label>
        <input id = "senderEmail" name = "email" type = "email" placeholder = "<?=$formelements['placeholder2']?>"><br><br>
        <label for = "comment"><?=$formelements['comment']?></label><br>
        <textarea id = "comment" name = "comment" id = "" cols = "35" rows = "10" placeholder = "<?=$formelements['placeholder3']?>"></textarea>
        <input type ="submit" value = "<?=$formelements['submit_name']?>"><br>
        <br>
    </form>