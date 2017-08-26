<ul class="socialshare">
    <?php foreach ($links as $name => $link): ?>
        <li>
            <a href="<?php echo $link ?>" rel="noopener" target="_blank" class="share-<?=strtolower($name)?>">
                <img src="<?=ipConfig()->baseUrl() . $assets . strtolower($name) . '.svg'?>" alt="<?=$name?>">
                <em><?=$name?></em>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

