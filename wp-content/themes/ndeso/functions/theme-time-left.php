<?php

/**
 * Penampil waktu Sekilas Info tema Ndeso
 *
 * Digunakan untuk menampilkan waktu post sekilas info
 * Seperti post pada twitter "5 menit yang lalu" atau "2 hari yang lalu"
 * Sebagian sudah di translate ke bahasa Indonesia
 *
 */


function themeblvd_time_ago() {
	
	global $post;
	
	$date = get_post_time('G', true, $post);
	
	
	// Array of time period chunks
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'tahun', 'themeblvd' ), __( 'tahun', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 30 , __( 'bulan', 'themeblvd' ), __( 'bulan', 'themeblvd' ) ),
		array( 60 * 60 * 24 * 7, __( 'minggu', 'themeblvd' ), __( 'minggu', 'themeblvd' ) ),
		array( 60 * 60 * 24 , __( 'hari', 'themeblvd' ), __( 'hari', 'themeblvd' ) ),
		array( 60 * 60 , __( 'jam', 'themeblvd' ), __( 'jam', 'themeblvd' ) ),
		array( 60 , __( 'menit', 'themeblvd' ), __( 'menit', 'themeblvd' ) ),
		array( 1, __( 'detik', 'themeblvd' ), __( 'detik', 'themeblvd' ) )
	);

	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}
	
	$current_time = current_time( 'mysql', $gmt = 7 ); // waktu Indonesia GMT + 7
	$newer_date = strtotime( $current_time );

	// Jeda waktu dalam detik
	$since = $newer_date - $date;

	// Perhitungan waktu tak tentu.
	if ( 0 > $since )
		return __( 'beberapa', 'themeblvd' );

	//Step one
	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];

		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}

	// Set output var
	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
	

	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'detik', 'themeblvd' );
	}
	
	$output .= __(' yang lalu', 'themeblvd');
	
	return $output;
}

add_filter('the_time', 'themeblvd_time_ago');


?>