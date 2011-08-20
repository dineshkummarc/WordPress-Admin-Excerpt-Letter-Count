<?php
/*
Plugin Name: Admin Excerpt Letter Count
Description: Adds a simple character counter to the admin post edit screen's "excerpt" field. Highlights red if characters exceed the defined excerpt length (default 55, but can be overridden by the theme.)
Version: 0.1
Author: Joss Crowcroft
Author URI: http://www.josscrowcroft.com
Tags: admin, post, edit, letter count, excerpt, post excerpt, character count, length, jquery
*/

function aelc_add_counter() {
	?>
	<script type="text/javascript">
		// Anti-pollution:
		(function($){
			$(function() {
				var $excerpt = $('#excerpt');

				// Only activate if there's an excerpt field:
				if ( $excerpt.length ) {
					// Create counter and max length value:
					var $counter = $('<p/>').insertAfter($excerpt),
					    maxChars = <?php echo intval(apply_filters('excerpt_length', 55)); ?>;
					
					// Bind keystrokes:
					$excerpt
					 .bind('keydown keyup keypress', countChars)
					 .bind('focus blur paste', function(){ setTimeout(countChars, 10); });
					
					// Character countin'
					function countChars() {
						$counter.css({color:( $excerpt.val().length > maxChars ? '#B00' : 'inherit')});
						$counter.html('<?php _e( "Characters" );?>: ' + $excerpt.val().length + '/' + maxChars);
					}
					
					// Do it the first time:
					countChars();
				}
			});
		}(jQuery));
	</script>
	<?php 
}
// Load this tiny plugin on admin screens:
add_action('admin_footer','aelc_add_counter');
?>