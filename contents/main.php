
        <div class="caption">{MAIN_SLOGAN}</div>
        <div class="item_wrapper">
            <?php foreach($pictures as $picture): ?>           
                <div class="item">
                   <img src="<?=$picture['link']?>" alt="<?=$picture['description_alt']?>">
                    <?=$picture['description']?>
                </div>
            <?php endforeach ?>   
        </div>
        <br><br>
        <div>
        <?php foreach($sections as $section): ?>           
            <div class ="pictures">
                <img src="<?=$section['link']?>" alt="<?=$section['description_alt']?>" style="max-width:100%">
            </div>
        <?php endforeach ?>             
        </div>