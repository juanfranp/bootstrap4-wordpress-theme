<?php if ( !is_front_page() && function_exists('yoast_breadcrumb') ) { ?>
	<?php yoast_breadcrumb('<section class="breadcrumb"><div class="container"><div class="row"><div class="col-12"><div class="breadcrumbs">','</div></div></div></div></section>'); ?>
<?php } ?>