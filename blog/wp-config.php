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
    require_once '../constants.php';

    define('DB_NAME', DB_NAME);

    /** MySQL database username */
    define('DB_USER', DB_USER);

    /** MySQL database password */
    define('DB_PASSWORD', DB_PASS);

    /** MySQL hostname */
    define('DB_HOST', DB_HOST);

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');

    /*     * #@+
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
     * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
     *
     * @since 2.6.0
     */
    define('WP_CACHE', true); //Added by WP-Cache Manager
    define('WPCACHEHOME', '/Applications/XAMPP/xamppfiles/htdocs/work/svn/threadcrafts/blog/wp-content/plugins/wp-super-cache/'); //Added by WP-Cache Manager
    define('AUTH_KEY', 'qyyas7+$~&N[R4Ik]sz+iwMv]![2#UJcJl<Cf28x.LA>jlk$X8e6<So7#-e9Vy&q');
    define('SECURE_AUTH_KEY', '];[0.}xM=H@-Y+S>e{9]?Y3n*Ni1YF<Y#q{L/4X+[(6W;3iDKN_QC|Zy+S{|%PzC');
    define('LOGGED_IN_KEY', '0u6c)l)-*Gn|ld$L+!NvB#6l}ci@gK4k+w=:N[iwwD;eV-EK-L+8Hb,t^H2}93)}');
    define('NONCE_KEY', 'j8-Z++h0B4B`-}+n/|C5O{Tacn[Y.|9RLAaSYSs/#.a=7GU91mQ|bt37ZC3LWzn7');
    define('AUTH_SALT', 'CR! tP-dq3a9[NUxJ~D_{}BviVfeG6^4[rB8&kO_Rn<r{r$ZueZ[Y6s,ytE5751/');
    define('SECURE_AUTH_SALT', '1QMp@3.HN;7uAD#Q4Oigm_V;PFx+o6u !>Wxg[&C1dk-1kBa$]z{`)wG]+.2X`RU');
    define('LOGGED_IN_SALT', 'wp-Rv]L9.L%uv+acBR6/Uy3.A.>MN+oSd_|9vRZ+RIf(|=8KL]x{]6N-|>C#*RS[');
    define('NONCE_SALT', 'hT[L]O>_2FMZ-lixU|4K$xY%Y^ekQZ#&yQKM#=^LG{S%mS.|g+y$7zWf-$-_{|cH');

    /*     * #@- */

    /**
     * WordPress Database Table prefix.
     *
     * You can have multiple installations in one database if you give each a unique
     * prefix. Only numbers, letters, and underscores please!
     */
    $table_prefix = 'wp_';

    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     */
    define('WP_DEBUG', DB_DEBUG);

    define('FS_METHOD', 'direct');

    /* That's all, stop editing! Happy blogging. */

    /** Absolute path to the WordPress directory. */
    if (!defined('ABSPATH'))
        define('ABSPATH', dirname(__FILE__) . '/');

    /** Sets up WordPress vars and included files. */
    require_once(ABSPATH . 'wp-settings.php');
    