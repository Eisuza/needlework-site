        <div>
        <?php foreach($types as $type): ?>
            
            <div class="caption">
                <img src="<?=$type['link']?>" alt="<?=$type['description_alt']?>">
                    <?=$type['title']?>
            </div>
            <p><?=$type['description']?></p>
            <?php endforeach ?>   
        </div>
