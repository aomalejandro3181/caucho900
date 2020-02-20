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
define( 'DB_NAME', 'caucho900' );

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
define( 'AUTH_KEY',         '3sDs`qD(qpOC<H(TE+bOuj76QjCU$z`$@)lCD_ngKfRk>yaL)QE4Q*_4V[t*mMt7' );
define( 'SECURE_AUTH_KEY',  'ggC+AUWaPx a@=B$|O@)%CyUK#:[Wk6Fvff!>CKZ81wM%kFQ,JoehPBAN)|hb2PH' );
define( 'LOGGED_IN_KEY',    'jy#r%+,5X&D34S&D9L9,gX;UhwX9>:zqC!|fNS(_VtT_RSBils;(!{a_gSpC3y*;' );
define( 'NONCE_KEY',        'jWm#D,D1<Jw*:1ZY#GTj$]Jua|=8Jt0Ke<Og[`mbo5^OTDmD~v*/}b^F2:~KW)Uy' );
define( 'AUTH_SALT',        '?,oe*8l>g^B^Aok_$TSCq^#i:!=Hw@_xF@]}uCP.#8UbphO3r<G,v(*FPVJpt}jV' );
define( 'SECURE_AUTH_SALT', '@!PHV-7R1#Zy-Z+[^_G(;&}vC<n+[8IdR|C|+4K1&VrmjHh@I/HBdi&,z3h{r}KC' );
define( 'LOGGED_IN_SALT',   'j]||`pv`/;^BlQ$pr,d+~PJi=L9=_qzpyBh/1;xAI$ESnA%RdV}D,2>}aai_?VXZ' );
define( 'NONCE_SALT',       'i!qeqQ{RhpBPd zk=]zu|6rSJtu6*j![;Llu_yS)`A&ov9V.0{L/Li0<Gj`0,eu4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'c900_';

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
