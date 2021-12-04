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
define( 'DB_NAME', 'pccornerdb' );
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
define( 'AUTH_KEY',         'OJ_:Q7,}[1,)KtozYmdO@Y6@|e~;G6?KYq/h)RYr/>:Ycr,iGi-Hkc?0=eCz%s3O' );
define( 'SECURE_AUTH_KEY',  'U[*]^c`N!00BXX5So@4Ucn6E6 kt[fVJR8[>k6i>w#AEQC?{=tNWDuZ1~OOqL464' );
define( 'LOGGED_IN_KEY',    '}nt*j3%d7oc[+63TU(r`~<k_%X#C8?p8aUxjV&:^2(/59?]JQu,6pk/qp+r7M,Mg' );
define( 'NONCE_KEY',        '=LMJc^xRfgc9y;OW*O$KJ~{YE)zR;< `y7L**7xrBlpk/ZmUG2W:6,>n UwPr<{V' );
define( 'AUTH_SALT',        '^Vv6`7];T0c~#(Q,tQ!jK~sr0D>_ll+(WS>V%e[lGNy#}N/P]$3oPzS/s2!Ye[k2' );
define( 'SECURE_AUTH_SALT', 'xd( %Q1k!y^<>uG$l6EIFCYBK.]e^?;iEHx!q2EqV?u[P8w~}2@!2L`Dk,Y,X6ve' );
define( 'LOGGED_IN_SALT',   'B-W/Z(#,z Hk>[PF]u7Hz_$?kD/sk~|S!`pWtp&-k&vMN&zW-KbU}_IrIvueN@Cz' );
define( 'NONCE_SALT',       '/l?Xh&,z8q5JiE64pA,9k/OO%N,k:j)_b=lxRji$-_p4|gK0{3x+q#vDC(nYcUB=' );
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
