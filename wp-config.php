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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rich' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Q3QbRdp1!y{-oCA6)3W>e`JlUnzOi+~1oV{@;&VfpVpQQaDp-p{O)f)kFHMUU6!k' );
define( 'SECURE_AUTH_KEY',  '@s#dQQmcl;(A%3qcfnOv;vfgScZ@tMJv{inKvz{cA]U2;1^#v[v^z~N_S&+RBb_1' );
define( 'LOGGED_IN_KEY',    '5r8g,^~M,oZ|t0^j}<*$W#pALFBVbne8JGvTeg>ZF(>{!m[aM/GxQS1Dl,<bia@<' );
define( 'NONCE_KEY',        '{aa>g2>PTnFgjq,nTQR7S;u/@63kHV&V-xQ&cFZ2+1G{x(t|L;*I;sS=KX1<3E]a' );
define( 'AUTH_SALT',        'QZ02#</^_#JMawm(Z/~[/BHoNp-+T!cAm)lW7H@VJ*@6(1Bk<1|WSeb4<qTLaJiN' );
define( 'SECURE_AUTH_SALT', '+Az1<AE`lug4~7vg)*7`LZ#J{Pb<{NwM@&n(F5N)PyX2KE+Ve5i6zmN<1(HIw:$f' );
define( 'LOGGED_IN_SALT',   'YE@u0X?&J<crn0e1^RZ 5MKQgLo@yW%gTV;%YqBJY$*d[EU*uzq$_XfRp,H%-BX)' );
define( 'NONCE_SALT',       'B2z,DjQk])&$b9K:K^%2]xkv@6JvIM$Gl[_jXe<xR%CPw<fd/}X^!>{z21P8,~o_' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
