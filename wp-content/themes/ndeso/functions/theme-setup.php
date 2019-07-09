<?php

/*
 * Tema Ndeso setup.
 * Pengaturan baru akan berjalan setelah tema diaktifkan
 * Mengganti pengaturan tema sebelumnya
 *
 */
function ndeso_setup() {

	// Fungsi menampilkan RSS link pada <head>.
	add_theme_support('automatic-feed-links');

	// Fungsi untuk create ukuran gambar baru
	add_theme_support('post-thumbnails');
	add_image_size('mini-thumbnail', 50, 50, true); // gambar kecil
	add_image_size('slide', 640, 290, true); // gambar untuk slide
	add_image_size('thumb', 600, 450, true); // gambar thumbnail
	add_image_size('medthumb', 80, 60, true); // gambar thumbnail kecil

	// Menambahkan sebuah menu baru bernama Navigasi
	register_nav_menus(array(
		'navigation' => __('Navigasi', 'ndeso'),
	));

	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list',
	));
}
add_action('after_setup_theme', 'ndeso_setup');

// jika tema diaktifkan, jumlah post per halaman akan berubah menjadi 6
if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
	update_option('posts_per_page', 8);
	update_option('paging_mode', 'default');
}

?>