        <div class="caption">{PRODUCTS_SLOGAN}</div>
        <div class="item_wrapper">
        <?php foreach($products as $product): ?>
        <div class="item">
            <img class="item_img" src="<?=$product['link']?>" alt="<?=$product['description_alt']?>">
            <div class="item_text"><?=$product['title']?></div>
        </div>
        <?php endforeach ?>   
        </div>
