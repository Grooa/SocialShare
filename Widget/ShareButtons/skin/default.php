
<p class="centered">Share this article</p>

<ul class="socialshare">
    <?php foreach ($links as $name => $link): ?>
        <li>
            <a href="<?php echo $link ?>" rel="noopener" target="_blank" class="share-<?=strtolower($name)?>">
            <?php include($assets . strtolower($name) . '.svg') ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

