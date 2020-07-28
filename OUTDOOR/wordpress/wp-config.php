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
define( 'DB_NAME', 'OUTDOOR' );

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
define( 'AUTH_KEY',         'gmu$_89 ?zFuEH6a9* fA:S;22;g@KnPO}vLqsq@?eee#bEKw(n.vtZf$_4*XZP{' );
define( 'SECURE_AUTH_KEY',  'pj3*#;J+ &CQ@{Cx,:@`B%j9%)vT=6q?}u-xE_2j7rZ;W^Hmok}4j5f]hWx-!1Ug' );
define( 'LOGGED_IN_KEY',    'Qu@ijuDoi`C#]01B!F 8VIaCnjgx:C:sd8!SacznVp e0%wcM>~BV>I.}uLTSq<1' );
define( 'NONCE_KEY',        'n$ o~[JyRe/oaF8+nK0yAL1)45E(,CV=XB%WoyA;=Pyb)=k83xDr:4?siRik lU ' );
define( 'AUTH_SALT',        ' UtP92+y|269c$] @/^&O#RUMoxvsnng}jq}kEzynwYO1xKUN^KVGXVT+$C-pU&k' );
define( 'SECURE_AUTH_SALT', '_9{qzo=`xV]J%is>9kI|fHm!9*r]/f&JOp<+~8I|@Nu@cT{Jg?EsNXEFNE;W&FZ`' );
define( 'LOGGED_IN_SALT',   'D !<vbG)x;mv9,SE}dg2/d$R$:[1HEU}C|dx&E#IJ?`G1]?G,&1x0i=f*E]k>#&W' );
define( 'NONCE_SALT',       '0W_4XGRv:dLA1:}?.3]w X>f+i,0lDhfwXuIsHHjhlY5UE*IC|;O/.G**H>;/2LL' );

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
