<?php

/**
 * Pengaturan tema Ndeso
 * Berisi berbagai informasi umum seputar Desa
 */
function options_admin_menu() {
	// here's where we add our theme options page link to the dashboard sidebar
	add_theme_page("Pengaturan Tema", "Pengaturan Tema", 'edit_themes', basename(__FILE__), 'options_page');
}
add_action('admin_menu', 'options_admin_menu');

function options_page() {
	// check options update
	if ($_POST['update_options'] == 'true') {
		update_option('desa', $_POST['desa']);
		update_option('kades', $_POST['kades']);
		update_option('alamat', $_POST['alamat']);
		update_option('maps', $_POST['maps']);
		update_option('apikey', $_POST['apikey']);
		update_option('kecamatan', $_POST['kecamatan']);
		update_option('kabupaten', $_POST['kabupaten']);
		update_option('provinsi', $_POST['provinsi']);
		update_option('kodepos', $_POST['kodepos']);
		update_option('luas', $_POST['luas']);
		update_option('logo_url', $_POST['logo_url']);
		update_option('warga', $_POST['warga']);
		
		update_option('gtpengumuman', $_POST['gtpengumuman']);
		update_option('gtkokades', $_POST['gtkokades']);
		update_option('gtopwarga', $_POST['gtopwarga']);
		update_option('gtprodes', $_POST['gtprodes']);
		update_option('gtgaleri', $_POST['gtgaleri']);
		update_option('gtvideo', $_POST['gtvideo']);
		update_option('gtagenda', $_POST['gtagenda']);
		update_option('gtlapub', $_POST['gtlapub']);
		update_option('gtpropem', $_POST['gtpropem']);
	}
	?>
	
	<div class="wrap">
		<div id="icon-options-general" class="icon32"><br /></div>
		<h2><?php _e('Pengaturan Web Desa', 'ndeso'); ?></h2>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript">
$("document").ready(function($){
	$("#change, #layout").slideUp();
	$(".setting").click(function(){
		$("#setting").slideDown();
		$("#change, #layout").slideUp();
  	});
	$(".change").click(function(){
		$("#change").slideDown();
		$("#setting, #layout").slideUp();
  	});
	$(".layout").click(function(){
		$("#layout").slideDown();
		$("#change, #setting").slideUp();
  	});
});
</script>
<style>
.tablist {margin: 15px 0 0; padding:10px 0 0 10px; list-style: none; display: block; background: #166fa7; height:50px; overflow: hidden; position: relative; z-index: 1000;}
.tablist li.image {background: #166fa7; border: none; margin:0 60px 0 0; height:40px; overflow:hidden;}
.tablist li.image img {width: 160px; height: 42px;}
.tablist li {float: left; display: inline; margin:10px 5px 0 0; padding: 0px 15px; line-height:40px; height:40px; background: #ddd;
color: #166fa7; font-weight: bold; cursor: pointer;}
#setting {background: #fff; margin-top:-5px;}
#setting td {border-bottom: 1px solid #eee;}
#setting td.tdleft {background: #f7f7f7;}
.bottom {background: #166fa7; border: none; margin:0; padding: 10px 20px; }
.bottom .submit {background: #ddd;color: #166fa7; border: none; padding: 5px 12px; font-weight: bold; border-radius: 0 ! important;}
#layout {background: #ddd; margin-top:-5px;}
#change td {border-bottom: 1px solid #eee;}
#change td.tdleft {background: #f7f7f7;}
#change {background: #fff; margin-top:-5px;}
</style>
		<form method="post" action="">
			<input type="hidden" name="update_options" value="true" />
			<div class="tab_block">
		    	<ul class="tablist">
			    	<li class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></li>
					<li class="setting">SETTING</li>
		     		<li class="change">GANTI TEXT</li>
					<li class="layout">LOGO WEB</li>
		    	</ul>
			
			<div id="setting">
			<table class="form-table">
				<tr valign="top">
					<td class="tdleft"><label for="desa"><?php _e('Nama Desa:', 'ndeso'); ?></label></td>
					<td><input type="text" name="desa" id="desa" size="50" value="<?php echo get_option('desa'); ?>"/><span
							class="description"> <?php _e('contoh, Simpang Sari', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="kades"><?php _e('Nama Kades / Lurah:', 'ndeso'); ?></label></td>
					<td><input type="text" name="kades" id="kades" size="50" value="<?php echo get_option('kades'); ?>"/><span
							class="description"> <?php _e('contoh, Bagio Murtedjo', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="alamat"><?php _e('Alamat kantor Desa / Kelurahan:', 'ndeso'); ?></label></td>
					<td><input type="text" name="alamat" id="alamat" size="50" value="<?php echo get_option('alamat'); ?>"/><span
							class="description"> <?php _e('contoh, Jl. Lintas Liwa No. 39', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="maps"><?php _e('Koordinat:', 'ndeso'); ?></label></td>
					<td><input type="text" name="maps" id="maps" size="50" value="<?php echo get_option('maps'); ?>"/><span
							class="description"> <?php _e('contoh, -5.932330 , 105.992419 (penulisan lat dan lang dipisah tanda koma)', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="apikey"><?php _e('API Key Google Maps:', 'ndeso'); ?></label></td>
					<td><input type="text" name="apikey" id="apikey" size="50" value="<?php echo get_option('apikey'); ?>"/><span
							class="description"> <?php _e('dapatan kode API Key dari ', 'ndeso'); ?><a href="https://developers.google.com/maps/web/" target="_blank">Google Dev</a></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="kecamatan"><?php _e('Kecamatan:', 'ndeso'); ?></label></td>
					<td><input type="text" name="kecamatan" id="kecamatan" size="50" value="<?php echo get_option('kecamatan'); ?>"/><span
							class="description"> <?php _e('contoh, Sumber Jaya', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="kabupaten"><?php _e('Kabupaten:', 'ndeso'); ?></label></td>
					<td><input type="text" name="kabupaten" id="kabupaten" size="50" value="<?php echo get_option('kabupaten'); ?>"/><span
							class="description"> <?php _e('contoh, Lampung Barat', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="provinsi"><?php _e('Provinsi:', 'ndeso'); ?></label></td>
					<td><input type="text" name="provinsi" id="provinsi" size="50" value="<?php echo get_option('provinsi'); ?>"/><span
							class="description"> <?php _e('contoh, Lampung', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="kodepos"><?php _e('Kode Pos:', 'ndeso'); ?></label></td>
					<td><input type="text" name="kodepos" id="kodepos" size="50" value="<?php echo get_option('kodepos'); ?>"/><span
							class="description"> <?php _e('contoh, 34871', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="luas"><?php _e('Luas Wilayah:', 'ndeso'); ?></label></td>
					<td><input type="text" name="luas" id="luas" size="50" value="<?php echo get_option('luas'); ?>"/><span
							class="description"> <?php _e('contoh, 1.234.567 m2', 'ndeso'); ?></span></td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="warga"><?php _e('Jumlah Warga:', 'ndeso'); ?></label></td>
					<td><input type="text" name="warga" id="warga" size="50" value="<?php echo get_option('warga'); ?>"/><span
							class="description"> <?php _e('contoh, 1.075', 'ndeso'); ?></span></td>
				</tr>
			</table>
            </div>
			
			<div id="change">
			<table class="form-table">
			    <tr valign="top">
					<td colspan="2">
						Pengaturan ganti text digunakan untuk mengganti beberapa text default, khususnya text judul / heading yang ada di halaman Beranda website.
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtpengumuman"><?php _e('Pengumuman:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtpengumuman" id="gtpengumuman" size="50" value="<?php echo get_option('gtpengumuman'); ?>"/><span
							class="description"> <?php _e('contoh, Woro Woro', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtkokades"><?php _e('Kolom Kades:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtkokades" id="gtkokades" size="50" value="<?php echo get_option('gtkokades'); ?>"/><span
							class="description"> <?php _e('contoh, Editorial Kades', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtopwarga"><?php _e('Opini Warga Desa:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtopwarga" id="gtopwarga" size="50" value="<?php echo get_option('gtopwarga'); ?>"/><span
							class="description"> <?php _e('contoh, Artikel Warga', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtprodes"><?php _e('Produk Komoditas Desa:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtprodes" id="gtprodes" size="50" value="<?php echo get_option('gtprodes'); ?>"/><span
							class="description"> <?php _e('contoh, Produk Unggulan', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtgaleri"><?php _e('Galeri:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtgaleri" id="gtgaleri" size="50" value="<?php echo get_option('gtgaleri'); ?>"/><span
							class="description"> <?php _e('contoh, Dokumentasi Photo', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtvideo"><?php _e('Video:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtvideo" id="gtvideo" size="50" value="<?php echo get_option('gtvideo'); ?>"/><span
							class="description"> <?php _e('contoh, Dokumentasi Video', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtagenda"><?php _e('Agenda Warga / Desa:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtagenda" id="gtagenda" size="50" value="<?php echo get_option('gtagenda'); ?>"/><span
							class="description"> <?php _e('contoh, Jadwal Kegiatan', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtlapub"><?php _e('Layanan Publik:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtlapub" id="gtlapub" size="50" value="<?php echo get_option('gtlapub'); ?>"/><span
							class="description"> <?php _e('contoh, Info Fasilitas Penting', 'ndeso'); ?></span>
					</td>
				</tr>
				<tr valign="top">
					<td class="tdleft"><label for="gtpropem"><?php _e('Proyek Pembangunan:', 'ndeso'); ?></label></td>
					<td>
					    <input type="text" name="gtpropem" id="gtpropem" size="50" value="<?php echo get_option('gtpropem'); ?>"/><span
							class="description"> <?php _e('contoh, Data Proyek Berjalan', 'ndeso'); ?></span>
					</td>
				</tr>
			</table>
			</div>
			
			<div id="layout">
			<table class="form-table">
				<tr valign="top">
					<td><label for="logo_url"><?php _e('URL Logo Website:', 'ndeso'); ?></label></td>
					<td>
					    <img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() . '/images/logo.png' ?>" alt=""/><br/><br/>
						<input type="text" placeholder="http://...." name="logo_url" id="logo_url" size="50" value="<?php echo get_option('logo_url'); ?>"/><br/>
						<span class="description">
							<a href="<?php echo home_url(); ?>/wp-admin/media-new.php" target="_blank"><?php _e('Upload logo (max 600px x 200px). Masuk Pustaka Media / Media Library dan copy URL gambar disini', 'ndeso'); ?></a>
						</span>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="bottom">
			<input class="submit" type="submit" value="SIMPAN PERUBAHAN" />
			</div>
			</div>
		</form>
	</div>
	<?php
}

?>