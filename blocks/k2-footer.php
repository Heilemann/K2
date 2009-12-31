<?php
/**
 * Footer Template
 *
 * This file is loaded by footer.php and used for content inside the #footer div
 *
 * @package K2
 * @subpackage Templates
 */
?>

<p class="footerpoweredby">
	<?php
		/* translators: 1: WordPress, 2: K2 */ 
		printf( __('Powered by %1$s and %2$s', 'k2_domain'),
			'<a href="http://wordpress.org/">WordPress</a>',
			'<a href="http://getk2.com/" title="' . __('Loves you like a kitten.', 'k2_domain') . '">K2</a>'
		);
	?>
</p>

<?php if ( get_k2info('style_footer') != '' ): ?>
	<p class="footerstyledwith">
		<?php k2info('style_footer'); ?>
	</p>
<?php endif; ?>

<p class="footerfeedlinks">
	<?php
		/* translators: 1: entries feed, 2: comments feed */ 
		printf( __('%1$s and %2$s', 'k2_domain'),
			'<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries Feed', 'k2_domain') . '</a>',
			'<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments Feed', 'k2_domain') . '</a>'
		);
	?>
</p>

<p class="footerstats">
	<?php printf( __('%d queries. %s seconds.', 'k2_domain'), get_num_queries(), timer_stop(0, 3) ); ?>
</p>
