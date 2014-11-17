<?php
/**
 * This file contains some helpful functions 
 * 
 * Do not modify the contents of this file, since it can be updated.
 */

/**
 * Wraps the given string with the given tag
 * 
 * Useful for simple cases like titles, post metas, etc.
 * 
 * @param string $value The value to be wrapped
 * @param string $tag The tag, which will act as a wrapper
 * @param string $classes The classes to apply
 * @return void
 */
function crb_wrap_value($value, $tag, $classes = false) {
	if ( empty($value) ) {
		return;
	}

	// Prepare Classes
	if ( is_array($classes) ) {
		$classes = implode(' ', $classes);
	}

	$open_tag  = '<' . $tag . ( $classes ? ' class="' . $classes . '"' : '' ) . ' >';
	$close_tag = '</' . $tag . '>';

	return $open_tag . $value . $close_tag;
}

/**
 * Returns an anchor with the given link, class and value
 * 
 * @param string $value The value of the anchor
 * @param string $link The link of the anchor
 * @param string|array $classes The classes of the anchor. Defaults to empty string
 * @param string $target
 * 
 * @return void
 */
function crb_create_anchor($value, $link, $classes = '', $target = '_self') {
	if ( empty($link) || empty($link) ) {
		return;
	}

	if ( $classes ) {
		if ( is_array($classes) ) {
			$classes = implode(' ', $classes);
		}

		$classes = 'class="' . $classes . '"';
	}

	ob_start();
	?>

	<a href="<?php echo $link; ?>" target="<?php echo $target; ?>" <?php echo $classes; ?>><?php
		echo $value;
	?></a>

	<?php
	return ob_get_clean();
}