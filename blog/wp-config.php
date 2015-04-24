<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1128417_wp1');

/** MySQL database username */
define('DB_USER', 'i1128417_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'B&[E2KiC1n58#@2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T8Lvn606rM4QPgHdV37psXU13oTuSxCkWQaB2GXsngYdOM4hnTMO2a4B4Ta4o3Cj');
define('SECURE_AUTH_KEY',  '9rYPLLD8pV0bGHbma3NLuL8GaZneCLvw7l2aNhRl8013sN1ogx1PbRLZeiSMxuHd');
define('LOGGED_IN_KEY',    'vUF3KmNz5cXtUl2tl2iVyuhflRH2DQFbwzuWlQwEryDptfOPeqxQKcIXNoyiw36Q');
define('NONCE_KEY',        'Dh1qMsduJ5Z3SSyVFdsOEefisGLgcPfCRebLHUhW6LagZxQfuPwrygC9PpV1Hhda');
define('AUTH_SALT',        'eLuP0E2l1subYREZiUMGNGB5wReiOcZCSujCr8DT5ZXiBkPe9xA9n6W8ZduycAf8');
define('SECURE_AUTH_SALT', 'hT1Q21GXUQU3rSs38Wrn2lbtSlLaHHw2zqf4ASYNmIOhcqwJuUAHhaix9NEoFZS6');
define('LOGGED_IN_SALT',   'rOiYPT93du1qz0Qxk5u377LCCtkW6vehioTFPoSusb7LYbx3TCkBHS9wDeA3c4pS');
define('NONCE_SALT',       'iCbgpIRSxgpnGzwOSm7Fjpx9hdpuZ9XgcxBShOfQkCStDizMABy8UUN7w6S4w4Qf');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
