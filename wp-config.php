<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kkn_dsm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zsx-zPcd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=vozGJRwo <ph%6zUj.@jd^}`^1z9t^0D[NiCmrcd,_vH+e<9+?,g2V.i@z^A|ew' );
define( 'SECURE_AUTH_KEY',  '>`L*58$HK6#z# ;IgTVA%t/Z(mG>?%(S-!W=l )Ah+=qSIviUmS7?l3glu$[~o=[' );
define( 'LOGGED_IN_KEY',    '{*iCM1jj|Pb+l3o@yHTguyO3DWm.m9E3Hjwm61wE`|(96D)C;`7%N()YSFbs}ZS^' );
define( 'NONCE_KEY',        'R]6n#Q[h,JK /!Fd4LS.>8<xyushiRLjEkT@qW%Ib8#c;F00WE[gvnqNK,5^R oZ' );
define( 'AUTH_SALT',        'I/6`I~@Ng;qN#%Ttk0H#L<L5Bc{jQk?w1VCbp`dA%8N]RAp~3+%eD3&3kF3|(Tve' );
define( 'SECURE_AUTH_SALT', 'Z/z^%U5|F#>&^YIFwvnBi<G?bx6%m-C@q$4tht{6b(>Lmfen:qKwWs?1rm67S*B#' );
define( 'LOGGED_IN_SALT',   '-_P{{Ypyw,^pUQcZ1CZVo&zNI<,?P 39+,REv1V8yIF$gD~)-H+WFf(DZjSzTNd:' );
define( 'NONCE_SALT',       'u<h*p3u{U#^YDR7jkNv3GnYq;fW8uww6D].gGg}exSc#8zb:`$< !,y5KbWNi;z+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
