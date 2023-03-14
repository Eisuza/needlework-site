
        <div class="caption">{ARTICLES_SLOGAN}</div>
            <div>
                <?php foreach($articles as $article): ?>
                    <div class="article">
                        <div class="article_title"><?=$article['title']?></div>
                        <div class="article_text" ><?=$article['description']?></div>
                     </div>
                <?php endforeach ?>
            </div>
