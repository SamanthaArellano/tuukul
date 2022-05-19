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
define( 'DB_NAME', 'catalogo' );

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
define( 'AUTH_KEY',         'S1CTLN|:; v&T-MDBq|?@j<AD/tx7,du ]%5{?s]/:jF_F(&7D*4#-{PzMe-rzu&' );
define( 'SECURE_AUTH_KEY',  'H7cuiWo/_9* uGjso~{w>1fGMXl9ey$Xv#Dj0Ety<K#<d^|+yv#[l{D_Rf@<ACkN' );
define( 'LOGGED_IN_KEY',    '(Nu=yV?vg[kKz,OLI5X!L_wMsl{]Rmm)aG|O/U!RFly7LXwvjLO<MdArP!r,K)Rs' );
define( 'NONCE_KEY',        '9;/qgeLh7nq<%VIw}]`&;F8 mR 0]Q}FA0W7_Erb)#E9pZ/541v,kT4Wo}E}VNA1' );
define( 'AUTH_SALT',        'ogr,tLUI^~5iI|lRybkGYxZ,pg(NonYy`#H?/acU8iLE`,ncp%^0-2G(~8A,c,~^' );
define( 'SECURE_AUTH_SALT', '2*B.Jf#fM!px3``VBj?;OHiF{[7I-E4D.FFN~*BkrqUIs),}1(~Ou56Q.X1QQCuc' );
define( 'LOGGED_IN_SALT',   '` I<hyXdt3f?$-@>ly~~GVw5xe,2o&K-?6r3_gCs#M1QeOOb0O[>Su7NHsr2fd S' );
define( 'NONCE_SALT',       'owD[`/#`a&+`cz?9x7c]UA[:Ibn9(-b|}Uk/g:%rH%FAV)V{`*4a4rL@GU)O{O#a' );

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
