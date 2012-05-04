<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo $site_url.'_graphics/Logo-SomEnergia-Verd-72.jpg' ?>" style="width:90px; margin-right:20px; vertical-align: text-bottom; border-radius:7px; box-shadow:0px 0px 10px #999;" /><?php echo $site_name; ?>
	</a>
</h1>
