<?php

/*
 * Menambahkan fungsi memotong konten (excerpt)
 *
 */
 
function new_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');

function smart_excerpt($string, $limit) {
	$words = explode(" ", $string);
	if (count($words) >= $limit) $dots = '...';
	else $dots = '';
	echo implode(" ", array_splice($words, 0, $limit)).$dots;
}

?>