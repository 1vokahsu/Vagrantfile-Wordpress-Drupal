<?php

/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         ',h>Af,nVv4$<tPl~AY]L~?1h,[z)93MP<!4xmY55i4Atd/ic_*<AXx|,obaS7]ix');
define('SECURE_AUTH_KEY',  'R*_|b/#djD%&Fcb^*SM)mg?fO]5n}p !n4D|;U5|Q%=%eVCMqgCS?P#D}pqZM8SO');
define('LOGGED_IN_KEY',    '*bwIJspZHpeRz_KNMR(%AT0+Qx0]9ewsz&j6E-l/eHkwP*ve;N& +3JS~QTxET`>');
define('NONCE_KEY',        '<}l3#,OMB`6a{S93=)TuB>m(dUGYR-.lzvf?2+}|pzyMx-eC;sH,?F)61e>K*d^U');
define('AUTH_SALT',        'i~$K{qy+BO0F.rJ0)]}4(2;b^0(/lRN1gO9@+j|gNA+FY01R+kDgu>^X~Z{].a];');
define('SECURE_AUTH_SALT', 'RKud|}`EGt(e|#o4YpBgxj.#(7XYWYO5nC<o0r;8PU6AN5Iyja2xZ.DW*nq^+&P-');
define('LOGGED_IN_SALT',   '-,*rwBgHZU+#l#W4->k2F0{c6wyGxs(=*chw(n_-u_+cT?`8~98UJxuE#N9WgIp&');
define('NONCE_SALT',       '$l ptb*bz ZOL`S^XWCCUgbH%S2[!2|V-0=~v&b~j{<Vl7MF%Eu/tjU)1)RS- }W');


$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
