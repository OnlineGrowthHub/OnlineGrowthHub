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
define( 'DB_NAME', 'onlinegrowthhub_db' );

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
define( 'AUTH_KEY',         'VdX<0SvnQN:B0W+s;Uw7v?Lw~%zXl%#p4GzaPs}maWi>[u7Y%429q+$`t[}Ca;A^' );
define( 'SECURE_AUTH_KEY',  'UGdR=rBw+fG;@)R<o(6*?ZkBYJI3Wsg2_.2+ m<2?UsdDdHs,{1`{<{F{5ivw{rh' );
define( 'LOGGED_IN_KEY',    'pZ(x4)(7d10u%JB^<#e)rTPe4R8*&[k)mRmeKzXKjaFMmbTiiN@WHlqQ(//m^xYg' );
define( 'NONCE_KEY',        '%F3z1x_S4}gF<1,{I>O4=yO[ZAD%o&47i5~1=![0lTW(2|Mjd7r5YH8h7p^xlywr' );
define( 'AUTH_SALT',        'h;6ZhX#n_}gGC@Bxj$+t7dwclQa|;`Rmm{XRk<Xmi2_JGSs]_K,,E}0*; ?NhmFJ' );
define( 'SECURE_AUTH_SALT', '111YGAM6cP|4l9:(T@Gq.~[1p/uj1E+3Uk|C8Oq,Rhu$?v%~Lf.k9BdQqx|Rj-Y ' );
define( 'LOGGED_IN_SALT',   'EQ(vnH_#^nNW;DYsxj+#Mz*OQms z{|t5WLxq(ar$*zNyJt+Vn^GJ}s&An6{EY5l' );
define( 'NONCE_SALT',       '|ueX<^Z(EQ@5BkgnvT{e%LA@xI8&!]3jv!xPT$7@F+GlLnMl4Lbhn^`VmEZ(-No#' );

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
