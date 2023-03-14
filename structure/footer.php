        <div class="caption">
            {FOOTER_TITLE_SLOGAN}
        </div>
        <div class="footer">
            <table>
                <?php foreach($expressions as $expression): ?>
             <tr>
                <td><?=$expression['record_l']?></td>
                <td><?=$expression['record_r']?></td>
            </tr>
            <?php endforeach ?>
            </table>
         </div>
</body>
</html>