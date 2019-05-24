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
define( 'DB_NAME', 'client2portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~Tz!SK[+=gz+4ZE$;R,H] fJvl9@gtr3R#:e&xlX=R`q&xz-:@E+8&v_v:dVN]~d' );
define( 'SECURE_AUTH_KEY',  '1-[~yLw0!mjEDtaD}k7Gv/Rk#]%<Q70mY^b4b.prV0;npvw?(R9X}<~`czEw(FVN' );
define( 'LOGGED_IN_KEY',    'HaX2UbL(-$Nr}83)]86T~bhrct (4OV<Ht6D;F#rn?u*wuYGcPCCw!CfDeY@E$v%' );
define( 'NONCE_KEY',        '4t&bxWP_e,3z(/E$HFhC* ,#OKD3v2qNYaXn^nY<+@D2Bf^=YWe1<{-^Py.`RBX=' );
define( 'AUTH_SALT',        '9IO@z{_PWwkL<opA!ckdBD:n~s{K1KA%Pg!/gfQ8Z8.x]. &Tp)Im%,G>_g4hK_-' );
define( 'SECURE_AUTH_SALT', '1s{XvX&KL_nS%.}f1g!yF>oA:.u|dsqMeAL<jGlP*M F*KNk/JOO_H$@n7?:X~<K' );
define( 'LOGGED_IN_SALT',   '^6<;sD)BYLG(q;*GjW:x]BZ<r{=W.10:|(fIdn73L]Gr/gW9vS+8BuB^Gr6]R|)q' );
define( 'NONCE_SALT',       'Ilv1_ Q2*.&J}NhChNV7H^Xm]-o6W.tT2l[8YCIdRXE2TZoef6{_;m=(}qRkgKz5' );

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
