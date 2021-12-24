<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'tubessjk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '),y;?No_BDpy$f|l5[s:N]CaydfO+=Pi:xnwYg=<@s)O@}Ci8r#nb?AecvnXv-*T' );
define( 'SECURE_AUTH_KEY',  'AfA}6,;6D(qKU]I<n-@TPE`0Vp`X&#di jB~~21gmi.Ow*!.kKq{g;-6nmCg}&Ca' );
define( 'LOGGED_IN_KEY',    'kTD^FJ(2kjrqJEQd$.5SzZyXu]GDsL.[Cr4@re77RAd8iei;9({0hDet=qIYTND$' );
define( 'NONCE_KEY',        'A3|?z+F[*^U[ K26NN@)Kef-#Ow@7T9#c{w WYk1k*xFNK|u7eD91}M:VL]7QjOQ' );
define( 'AUTH_SALT',        'RuU[v~BLYMMQ2(-/`KFq8UY5(afuf#Ug>vD60B%_eFTfAN PY^hf%/B89k6S>2.N' );
define( 'SECURE_AUTH_SALT', 'nhj@UeUM~D9B^OI]33mP~2PGn$t!lBlh]2)PZ[[b}z<^6_rPZh8;j|AGxk?pjW*l' );
define( 'LOGGED_IN_SALT',   'ud#P]6W=9jfAnH^u(}w%`XCHL1_9X*@t5Y-tbDF%`d2w0~ 4:y=j_95Xj[bh|TxA' );
define( 'NONCE_SALT',       '#4Xd8Lkh.aE,GUcL+-VJ[~(-1/%oca6I;gUU(rcPH%Z-E}7RUZz-o;e1E`E1e89L' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
