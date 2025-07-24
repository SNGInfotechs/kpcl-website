<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kpcl-website' );

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
define( 'AUTH_KEY',         '`!_-K2B7M*0Hz,Q3?QPL#8jMqt/L#75>KC2tr):OGfE0,;QK|YNF69:EZqf~w9u-' );
define( 'SECURE_AUTH_KEY',  '9+gd5l86Tty@,K@Shy)6moJZ`O3V^/6e&HKa1isob.b`ZDqJcC,u jsJ_K6beJS@' );
define( 'LOGGED_IN_KEY',    'j yL-^AWI>PnRBX{t8lD#x[KmW8_]D<ebi_j^[Iz{AI5%ynR(m8X]qq ^T90om6%' );
define( 'NONCE_KEY',        '-pLMiNuEVt^UzQr/Gp|E+q$]Vm@<tb7`>h|MQM*Hc:Z2{k6HavS$KhMnNja#4u{}' );
define( 'AUTH_SALT',        '%x)7I?J`!7S7,<#l8>G}x`FI|czN nCrcIa~;b2_n9$*B<%]fOtM;1q1U(XJC#[!' );
define( 'SECURE_AUTH_SALT', 'tS>U:k*si9/k>@1u]F-S6,xXR_0eryf.C{b@d !b3hsOmh*$/*AhB16{*S_hO#1!' );
define( 'LOGGED_IN_SALT',   '.V<$RLgMrg{7r^jM5~V_]Lk&3:0j)*+,ze:V{4?/8a1TS+VFJD3W~IH^9`bS{i`(' );
define( 'NONCE_SALT',       '[g{z~m-9$1dtb/{KYG.e*t9[brhZU&s}xa9seR{VhOB3]98}SKO/OY[P?pmN}jg:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
