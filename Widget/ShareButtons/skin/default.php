<p>Share this article</p>
<?php
foreach ($links as $name => $link) {
?>
	<a href="<?php echo $link ?>" rel="noopener" target="_blank">
		<?php include($assets . strtolower($name) . '.svg') ?>
	</a>
<?php
}
?>
