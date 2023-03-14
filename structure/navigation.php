        <div>
            <nav>
                <ul>
                    <?php foreach($elements as $element): ?>
                    <li><a href="<?=$element['link']?>"><?=$element['section']?></a></li>
                    <?php endforeach ?>                   
                </ul>
            </nav>
        </div>
         <div class="flex_container ">
            <div class="flex_item_left">
                <ul>
                    <li><i class="fa-solid fa-bars"></i>
                        <ul class = "submenu">
                            <?php foreach($elements as $element): ?>
                            <li><a href="<?=$element['link']?>"><?=$element['section']?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="flex_item_right">
                {NAV_TITLE_MOBILE}
            </div>
        </div>