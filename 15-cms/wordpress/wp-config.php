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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Q^6OrGR2l}3#]F~etzd&Z V^B?y .jK-hvl;* ErP4w w+!B%a4<IXRF}l=w<s&d' );
define( 'SECURE_AUTH_KEY',  'HPS28|&=2ss; _h;nB1S|B^{<8`0<+}Qr;Q#npt+5~-~$Bldb[5Qv1WA)-+nqS,.' );
define( 'LOGGED_IN_KEY',    'Wp0Z.}1Ea4nka=vI-w:u+->v{_;_0.ZIP=VGx]|^rL|mj3[e38r3. *7MaF}@}-o' );
define( 'NONCE_KEY',        'Ki`_=c~a7OoM:.iWIt.%N|s$s77`g(@NdE7)iY*u,fzgLMcr<:[wb3o)|Qor{k}G' );
define( 'AUTH_SALT',        'ud%y?K3f3SK]kIo<Pmb&/}sfTp?grM/GS9hiAK9Gp@f6.:`EJ,U%CE($f~u`Y9ta' );
define( 'SECURE_AUTH_SALT', 'Kdqn:_@p@Io)3,%0l+ZpE&Y!Y0J9U.Cb 6e9GH!o96)Nue[&LLRcMC~Q}+$(mL06' );
define( 'LOGGED_IN_SALT',   'A}BFvi_{^yIvk&)!RMTD7W]p3vnCz0kRT%~C&6pI)lfdY?_G;8Z#7fH$[f{oFN6$' );
define( 'NONCE_SALT',       'P<5o)@!CqR~7fv_4B,Lq<!(@qUZXiPv:^cV:w>2|/VgMBGZvy_$bGF:S `,ynqDR' );

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
