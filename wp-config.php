<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'padeiwpe_wp868' );

/** Database username */
define( 'DB_USER', 'padeiwpe_wp868' );

/** Database password */
define( 'DB_PASSWORD', '@-2e]PN(UKp3Z]S8' );

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
define( 'AUTH_KEY',         'g25fsf44tlrulrwyhpft2ygxgmag9w7ataprzpjqwvk2t6fr5bb3mfbuagviz9yc' );
define( 'SECURE_AUTH_KEY',  'wce5y3jpeterdj0jggg40iefxbv1zmua5lnvduqzztwliwhiub0f2ao9wwv3vtgt' );
define( 'LOGGED_IN_KEY',    'gxqtcxggezoynkpyvrbe6bgmvx9snd01g48heqtbhhp0m6dodeycl0re3ytybllf' );
define( 'NONCE_KEY',        'z0orhqnooxeodtitdfpjtpr6101pmgx0i5hjtwaso5hpesflsxgi4yao9qzwyr0t' );
define( 'AUTH_SALT',        '3m2pl01reawgrfmkgimsllvy1flnoifo2tgorriwuptn6hjmki7fshxd6p02alwz' );
define( 'SECURE_AUTH_SALT', '9xvbvpa3tdl9lnytpmnlx32j2cyb4tm45nwualzn6kn7vwaeiexv8tpirqkenbfu' );
define( 'LOGGED_IN_SALT',   '0ovijxhmxpvqcanqstsbd9juqbbq1chg2s9lqmdzwqi8uw0utxuc4srjk3a5mmar' );
define( 'NONCE_SALT',       'rqstyksju2xoxtlnourncafa5xjfv72fyqr4xmmyffpy5os8kf2qiygaafuvelsx' );

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
$table_prefix = 'wpmk_';

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
