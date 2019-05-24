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
define( 'DB_NAME', 'wordyword' );

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
define( 'AUTH_KEY',         'zRcL>_DEnLyo9Ghm(PN@J&np<3kTF9io+Y<N)i, A?|WDi/Y6EF-c5j5Y7)gg@5$' );
define( 'SECURE_AUTH_KEY',  'jJfrH!bw/<EAk`/XL_xVWq~T}93zGT^@Q3mN?+T-kY(CGA:*K<>$Pj&0n~6LvlAQ' );
define( 'LOGGED_IN_KEY',    'W~=w$lDAcEPPeHT(B/f}~U;2)GxvG0x  ? -j^V[y%iNE5Y8DQvFq~8P2CKn>kjn' );
define( 'NONCE_KEY',        'OUY0CN)OAu&oQAOyizmi*ybJ.(dzQ45Z|}S}!Ci~}kWqmA]T)T5go3oA@.y!E92q' );
define( 'AUTH_SALT',        '1Md:pb]`rjGRMhkAkZ1QnH!7i3D(eIwe8@[r>~;?T,:/9TJg3-:AKY JalP-E)O>' );
define( 'SECURE_AUTH_SALT', 'QKt#*g#F.X1Ff2t2:S<MJy5{u0Fr2sN}JGF,#Gw9Orj:|Xc-J6Tdi0oY}.^3OqHA' );
define( 'LOGGED_IN_SALT',   'cDn9QdY1uB2OqDwMb@0tMa*zxg]QE&[]Hpp9o&jE=fnKbJC7`Z<LyZ>ttJP@TL/_' );
define( 'NONCE_SALT',       'Ih`3gpLuC{E<XUzU@`#h(PN3r0kYDVHvOZx.0H<h)_s%mL8)&d~C2?pf;&(s.l&7' );

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
