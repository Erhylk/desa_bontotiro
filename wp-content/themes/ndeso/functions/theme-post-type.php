<?php 

add_action( 'init', 'create_post_type' );

function create_post_type() {

/*** POST TYPE OPINI KADES ***/		

	register_post_type( 'kades',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Kolom Kades' ),				
	    'singular_name' => __( 'Kolom Kades' ),        
	    'add_new' => __( 'Tambah Tulisan?' ),	
	    'add_new_item' => __( 'Tambah Tulisan' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Tulisan' ),	
	    'new_item' => __( 'Tulisan Baru' ),	
	    'view' => __( 'Lihat Tulisan' ),	
	    'view_item' => __( 'Lihat Tulisan' ),	
	    'search_items' => __( 'Cari Tulisan' ),	
	    'not_found' => __( 'Tidak ada Tulisan ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Tulisan di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail', 'author'),        			            
		'exclude_from_search' => false, 	 
		 )	
    );


/*** POST TYPE Berita ***/		

	register_post_type( 'berita',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Berita' ),				
	    'singular_name' => __( 'Berita' ),        
	    'add_new' => __( 'Tambah Berita?' ),	
	    'add_new_item' => __( 'Tambah Berita' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Berita' ),	
	    'new_item' => __( 'Berita Baru' ),	
	    'view' => __( 'Lihat Berita' ),	
	    'view_item' => __( 'Lihat Berita' ),	
	    'search_items' => __( 'Cari Berita' ),	
	    'not_found' => __( 'Tidak ada berita ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada berita di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 	 
		 )	
    );
	
// SEKILAS INFO

	register_post_type( 'sekilas-info',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Sekilas Info' ),				
	    'singular_name' => __( 'Sekilas Info' ),        
	    'add_new' => __( 'Data info baru?' ),	
	    'add_new_item' => __( 'Tambah info baru' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit info' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat info' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada info ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada info di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => false,        			            
		'supports' => array( 'editor',),        			            
		'exclude_from_search' => false, 	 
		 )	
    );	

/*** POST TYPE GALERI ***/
	
	register_post_type( 'galeri',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Galeri' ),				
	    'singular_name' => __( 'Galeri' ),        
	    'add_new' => __( 'Tambah Galeri?' ),	
	    'add_new_item' => __( 'Tambah Galeri' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Galeri' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Galeri' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Galeri ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Galeri di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 
		 )	
    );
	
/*** POST TYPE AGENDA ***/
	
	register_post_type( 'agenda',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Agenda' ),				
	    'singular_name' => __( 'Agenda' ),        
	    'add_new' => __( 'Tambah Agenda?' ),	
	    'add_new_item' => __( 'Tambah Agenda' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Agenda' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Agenda' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Agenda ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Agenda di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor',),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'event',
		 )	
    );
	
		function event() {
	    add_meta_box('ndeso_events', 'Data Agenda', 'ndeso_events', 'agenda', 'side', 'default');
	}

	function ndeso_events() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $lokasi = get_post_meta($post->ID, '_lokasi', true);
	    $koordinator = get_post_meta($post->ID, '_koordinator', true);

	    // Echo out the field

	        echo '<p>Isian data kelengkapan seputar Agenda yang akan dilaksanakan</p>';
			echo '<p>Lokasi Acara</p>';
	        echo '<input type="text" name="_lokasi" value="' . $lokasi  . '" class="widefat" />';
	        echo '<p>Koordinator</p>';
	        echo '<input type="text" name="_koordinator" value="' . $koordinator  . '" class="widefat" />';
	}

	function ndeso_events_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_lokasi'] = $_POST['_lokasi'];
		$events_meta['_koordinator'] = $_POST['_koordinator'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_events_meta', 1, 2); // save the custom fields
	
/*** POST TYPE PEMBANGUNAN ***/
	
	register_post_type( 'pembangunan',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Pembangunan' ),				
	    'singular_name' => __( 'Pembangunan' ),        
	    'add_new' => __( 'Tambah Proyek?' ),	
	    'add_new_item' => __( 'Tambah Proyek' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Proyek' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Proyek' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Proyek ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Proyek di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'proyek',
		 )	
    );
	
		function proyek() {
	    add_meta_box('ndeso_proyek', 'Data Proyek', 'ndeso_proyek', 'pembangunan', 'side', 'default');
	}

	function ndeso_proyek() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $lopro = get_post_meta($post->ID, '_lopro', true);
	    $kopro = get_post_meta($post->ID, '_kopro', true);
		$tapro = get_post_meta($post->ID, '_tapro', true);
		$anpro = get_post_meta($post->ID, '_anpro', true);
		$mupro = get_post_meta($post->ID, '_mupro', true);

	    // Echo out the field

	        echo '<p>Isian data kelengkapan seputar Pembangunan (proyek)</p>';
			echo '<p>Lokasi Proyek</p>';
	        echo '<input type="text" name="_lopro" value="' . $lopro  . '" class="widefat" />';
	        echo '<p>Koordinator</p>';
	        echo '<input type="text" name="_kopro" value="' . $kopro  . '" class="widefat" />';
			echo '<p>Tahun Anggaran</p>';
	        echo '<input type="text" name="_tapro" value="' . $tapro  . '" class="widefat" />';
			echo '<p>Total Anggaran</p>';
	        echo '<input type="text" name="_anpro" value="' . $anpro  . '" class="widefat" />';
			echo '<p>Mulai Start Proyek</p>';
	        echo '<input type="text" name="_mupro" value="' . $mupro  . '" class="widefat" />';
	}

	function ndeso_proyek_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_lopro'] = $_POST['_lopro'];
		$events_meta['_kopro'] = $_POST['_kopro'];
		$events_meta['_tapro'] = $_POST['_tapro'];
		$events_meta['_anpro'] = $_POST['_anpro'];
		$events_meta['_mupro'] = $_POST['_mupro'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_proyek_meta', 1, 2); // save the custom fields

/*** POST TYPE LAYANAN ***/
	
	register_post_type( 'layanan',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Layanan Publik' ),				
	    'singular_name' => __( 'Layanan Publik' ),        
	    'add_new' => __( 'Tambah Layanan?' ),	
	    'add_new_item' => __( 'Tambah Layanan' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Layanan' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Layanan' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Layanan ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Layanan di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'publik',
		 )	
    );
	
		function publik() {
	    add_meta_box('ndeso_publik', 'Lokasi Layanan Publik', 'ndeso_publik', 'layanan', 'side', 'default');
	}

	function ndeso_publik() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $layanan = get_post_meta($post->ID, '_layanan', true);
	    $alamat = get_post_meta($post->ID, '_alamat', true);
		$telepon = get_post_meta($post->ID, '_telepon', true);
		$buka = get_post_meta($post->ID, '_buka', true);
		$tutup = get_post_meta($post->ID, '_tutup', true);
		

	    // Echo out the field

			echo '<p>Nama Lokasi</p>';
	        echo '<input type="text" name="_layanan" value="' . $layanan  . '" class="widefat" />';
	        echo '<p>Alamat</p>';
	        echo '<input type="text" name="_alamat" value="' . $alamat  . '" class="widefat" />';
			echo '<p>No Telpon</p>';
	        echo '<input type="text" name="_telepon" value="' . $telepon  . '" class="widefat" />';
			echo '<p>Jam Buka</p>';
	        echo '<input type="text" name="_buka" value="' . $buka  . '" class="widefat" />';
			echo '<p>Jam Tutup</p>';
	        echo '<input type="text" name="_tutup" value="' . $tutup  . '" class="widefat" />';
	}

	function ndeso_layanan_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_layanan'] = $_POST['_layanan'];
		$events_meta['_alamat'] = $_POST['_alamat'];
		$events_meta['_telepon'] = $_POST['_telepon'];
		$events_meta['_buka'] = $_POST['_buka'];
		$events_meta['_tutup'] = $_POST['_tutup'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_layanan_meta', 1, 2); // save the custom fields	

/*** POST TYPE PEMBANGUNAN ***/
	
	register_post_type( 'video',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Video' ),				
	    'singular_name' => __( 'Video' ),        
	    'add_new' => __( 'Tambah Video?' ),	
	    'add_new_item' => __( 'Tambah Video' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Video' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Video' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Video ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Video di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title' ),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'vid',
		 )	
    );
	
		function vid() {
	    add_meta_box('ndeso_vid', 'Video Galeri', 'ndeso_vid', 'video', 'side', 'default');
	}

	function ndeso_vid() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $embed = get_post_meta($post->ID, '_embed', true);

	    // Echo out the field

	        echo '<p>Untuk memudahkan penambahan video, gunakan embed video dari Youtube, cukup masukkan ID Video</p>';
			echo '<p>ID Video Youtube</p>';
	        echo '<input type="text" name="_embed" value="' . $embed  . '" class="widefat" />';
	}

	function ndeso_vid_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_embed'] = $_POST['_embed'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_vid_meta', 1, 2); // save the custom fields
	
	
/*** PRODUK DESA ***/
	
	register_post_type( 'produk-desa',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Produk Desa' ),				
	    'singular_name' => __( 'Produk Desa' ),        
	    'add_new' => __( 'Tambah Produk?' ),	
	    'add_new_item' => __( 'Tambah Produk' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Produk' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Produk' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Produk ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Produk di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 
		'register_meta_box_cb' => 'produk',
		 )	
    );
	
		function produk() {
	    add_meta_box('ndeso_produk', 'Detail Info', 'ndeso_produk', 'produk-desa', 'normal', 'default');
	}

	function ndeso_produk() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $nama = get_post_meta($post->ID, '_nama', true);
		$telp = get_post_meta($post->ID, '_telp', true);
		$alamat = get_post_meta($post->ID, '_alamat', true);

	    // Echo out the field

	        echo '<p>Nama Usaha / Pemilik</p>';
	        echo '<input type="text" name="_nama" value="' . $nama  . '" class="widefat" />';
			echo '<p>No Telepon</p>';
			echo '<input type="text" name="_telp" value="' . $telp  . '" class="widefat" />';
			echo '<p>Alamat</p>';
			echo '<input type="text" name="_alamat" value="' . $alamat  . '" class="widefat" />';
	}

	function ndeso_produk_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_nama'] = $_POST['_nama'];
		$events_meta['_telp'] = $_POST['_telp'];
		$events_meta['_alamat'] = $_POST['_alamat'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_produk_meta', 1, 2); // save the custom fields
	
	
/*** POST TYPE DANA DESA ***/
	
	register_post_type( 'dana-desa',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Transparansi Dana' ),				
	    'singular_name' => __( 'Transparansi Dana' ),        
	    'add_new' => __( 'Tambah Laporan?' ),	
	    'add_new_item' => __( 'Tambah Laporan' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Laporan' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Laporan' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Laporan ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Laporan di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail' ),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'lap',
		 )	
    );
	
		function lap() {
	    add_meta_box('ndeso_lap', 'Detail Laporan', 'ndeso_lap', 'dana-desa', 'side', 'default');
	}

	function ndeso_lap() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $jumlah = get_post_meta($post->ID, '_jumlah', true);
		$tang = get_post_meta($post->ID, '_tang', true);

	    // Echo out the field

	        echo '<p>Jumlah Alokasi Dana</p>';
	        echo '<input type="text" name="_jumlah" placeholder="Rp." value="' . $jumlah  . '" class="widefat" />';
			echo '<p>Penanggung Jawab</p>';
			echo '<input type="text" name="_tang" value="' . $tang  . '" class="widefat" />';
	}

	function ndeso_lap_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_jumlah'] = $_POST['_jumlah'];
		$events_meta['_tang'] = $_POST['_tang'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_lap_meta', 1, 2); // save the custom fields

/*** POST TYPE LAPORAN ***/
	
	register_post_type( 'laporan',		
	array(			
	    'labels' => array(				
	    'name' => __( 'Laporan Tahunan' ),				
	    'singular_name' => __( 'Laporan Tahunan' ),        
	    'add_new' => __( 'Tambah Baru?' ),	
	    'add_new_item' => __( 'Tambah Baru' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Laporan' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Laporan' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Laporan ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Laporan di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'thumbnail' ),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'tahun',
		 )	
    );
	
		function tahun() {
	    add_meta_box('ndeso_laptahun', 'Laporan Tahunan Desa', 'ndeso_laptahun', 'laporan', 'side', 'default');
	}

	function ndeso_laptahun() {
	    global $post;
	    // Noncename needed to verify where the data originated
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    // Get the location data if its already been entered

	    $tahun = get_post_meta($post->ID, '_tahun', true);
		$total = get_post_meta($post->ID, '_total', true);
		$pakai = get_post_meta($post->ID, '_pakai', true);
		$sisa = get_post_meta($post->ID, '_sisa', true);

	    // Echo out the field

	        echo '<p>Tahun Laporan</p>';
	        echo '<input type="text" name="_tahun" value="' . $tahun  . '" class="widefat" />';
			echo '<p>Total Dana Anggaran</p>';
	        echo '<input type="text" name="_total" placeholder="Rp." value="' . $total  . '" class="widefat" />';
			echo '<p>Dana Terpakai (kosongkan sampai akhir tahun baru diisi)</p>';
	        echo '<input type="text" name="_pakai" placeholder="Rp." value="' . $pakai  . '" class="widefat" />';
			echo '<p>Dana Tersisa (kosongkan sampai akhir tahun baru diisi)</p>';
			echo '<input type="text" name="_sisa" placeholder="Rp." value="' . $sisa  . '" class="widefat" />';
	}

	function ndeso_laptahun_meta($post_id, $post) {

	    // verify this came from the our screen and with proper authorization,
	    // because save_post can be triggered at other times

	    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	    return $post->ID;
	    }

	    // Is the user allowed to edit the post or page?

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    // OK, we're authenticated: we need to find and save the data
	    // We'll put it into an array to make it easier to loop though.

	    $events_meta['_tahun'] = $_POST['_tahun'];
		$events_meta['_total'] = $_POST['_total'];
		$events_meta['_pakai'] = $_POST['_pakai'];
		$events_meta['_sisa'] = $_POST['_sisa'];

	    // Add values of $events_meta as custom fields

	    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!	        
		    if( $post->post_type == 'revision' ) return; // Don't store custom data twice
	        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
	        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
	            update_post_meta($post->ID, $key, $value);
	        } else { // If the custom field doesn't have a value
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	    }

	}

	add_action('save_post', 'ndeso_laptahun_meta', 1, 2); // save the custom fields	
	
}
	

	add_action( 'init', 'create_tahun_taxonomy', 0 );
	function create_tahun_taxonomy() {
	  $labels = array(
	    'name' => _x( 'Tahun + Kategori', 'taxonomy general name' ),
	    'singular_name' => _x( 'Tahun + Kategori', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Cari Kategori' ),
	    'all_items' => __( 'Semua Kategori' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Kategori' ),
	    'update_item' => __( 'Update Kategori' ),
	    'add_new_item' => __( 'Tambah Baru' ),
	    'new_item_name' => __( 'Tambah Kategori Baru' ),
	    'menu_name' => __( 'Tahun + Kategori' ),
	  );   
	// Now register the taxonomy
	  register_taxonomy('tahun',array('dana-desa'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	}

?>