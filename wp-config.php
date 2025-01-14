<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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

define( 'DB_NAME', "websit19_munasprok" );


/** Database username */

define( 'DB_USER', "websit19_Munasprok" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '{.2-/|:z(@HZyZRpAS>EGZA,o_@L#Ue)jGqUd|c/oqU+0q/6dI&THK0~N(^h(8h~' );

define( 'SECURE_AUTH_KEY',  '}tXlp)u[WYqD!E5,&H1b?YV>_9oZNGpN%nLFLRCrt<[UoZx|nXyOZ8!zF(Q;D.bq' );

define( 'LOGGED_IN_KEY',    '%6u={PgH{C;/sMP_.yktAyk>ceVH)e0U<VmwxqB:jbUqjc>rUwc+T8Mge;p#3O#`' );

define( 'NONCE_KEY',        'v2/HI1C`:~z[RozD4d~_kBHh%S9w61B}x1]O.K9MMk=Tt*kyprRq=UJUjFmOu6jB' );

define( 'AUTH_SALT',        'j5R<~A#y~|>`gH$p?5a)[yOQq?>TSA=YUrms gxHjCPl#:a@^.V92V-0k~;c`#%T' );

define( 'SECURE_AUTH_SALT', 'D^vW4C;,wy/oT6L1&2}AGn#W-mlBxj6>1~{IdVqCAbp2A0j>LU)-eTC97:J339:i' );

define( 'LOGGED_IN_SALT',   'B$*k>bBCC/RWpiPP@3yr]%;{MwtOQ@%vH1{j!j>W(r|^U_|:)I~?/vjyQ_k+4ET#' );

define( 'NONCE_SALT',       '%EwjFK5:.29w`IA#LB$5s.:v+cr,>%U}gIhLp)+(GQDS^L1MN8T+()H:R]akJ!=L' );


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




define( 'DUPLICATOR_AUTH_KEY', 'mK:oHBNf$g^3XJ9xIfO*((Z7U6I)hk?o?9&v#h:qZyR.P.t1h2eG~]x1c bd.O]$' );
#define( 'WP_PLUGIN_DIR', '/home/websit19/public_html/munasprok.or.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/websit19/public_html/munasprok.or.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

