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
define('DB_NAME', 'fruitoffice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Do*|2114AQD?g$,LA3MrC$]8&i8 5DClHEg$<t/[/-}JgaE*iZ=b+pGJFmkpGm}Y');
define('SECURE_AUTH_KEY',  '+S~AtwO{[9r%NUvYW/rVeh#AUT+~*q^iU.N<0JuvixKTWm<%0@9%p7[`vsN[Kp@L');
define('LOGGED_IN_KEY',    'EYt#;?0po|-{>*sp0Y)0u0[FF*I)n{Tm#,=MOV3nk=W(j[R1[vGnWjW.p)8_pfJa');
define('NONCE_KEY',        'w$H&5:_QU9oCN?Iw#.bj.oSmQ]HTn)*.SHlR1#$HP%>URMb`y2a*=J&+R*ju,q]_');
define('AUTH_SALT',        'kZ5,wrMJT_,a()=jHQ;3`9tZg2mA?=d&yK8K>k>-CahXjS{Xeb?cPQ.9)jD7U&pF');
define('SECURE_AUTH_SALT', '6e]0S=?{Qasvw!,TryuJPU.B>[ap*UlOm~Bi8G4gHhjP/D%.Nkt)[JhDoSLGpSV0');
define('LOGGED_IN_SALT',   'sOy^q}c1$FXng3CsHWK>Ea)%>?WgVs}|M7YmXU|VL%q/0mKXBb oChK:QSf%{w2.');
define('NONCE_SALT',       't:TdNSDV05+X}8oTdtv9veIBp<~P$Wb<.)Yc<T5EQ;vK159lh}vU@v+O*@iDi4Ya');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fo_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
