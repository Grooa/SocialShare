<p>Share this article</p>
<?php
foreach ($links as $name => $link) {
?>
	<a href="<?php echo $link ?>" rel="noopener" target="_blank">
		<img
			src="<?php echo ipFileUrl($assets . strtolower($name) . '.svg'); ?>"
			alt="Share on <?php echo $name; ?>">
	</a>
<?php
}
?>
