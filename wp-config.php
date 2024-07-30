<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projetplanty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hm?n!+Tv*uH&<9f|X{YKI9(@Bv<7IBr7;2&ba8}^G;P2,k[JI@hT9^Vyi/2&cctW' );
define( 'SECURE_AUTH_KEY',  'F:&~4D9)88E|g]5/8?_}|y(J>xMNf|dvD`lf7>dmm=M,cBBwpN29gLPjOwO%h<<m' );
define( 'LOGGED_IN_KEY',    '0.g`RC+f_|RyNpEs|KecnChPLs 1W`LdG_NrD5#C3*x#f=TBl,^z{hQEA<fj,Q>;' );
define( 'NONCE_KEY',        'uJ<h(c8q:)9VCtnXGz|G9.EqUvSzP0x:R:%uw,KXeZ9 ^F=b&rh+8iW{8+Gy3ss6' );
define( 'AUTH_SALT',        's&+uoFr%}b)j{Q{tz+fp|t0~LaQCoO}0L{0W$=K~)ZKa9ti ^Tu?Xzv^lH5B@]Rk' );
define( 'SECURE_AUTH_SALT', '3&EDKI.wXkEC{IVYjwi|m=f1ZRu/c$25zs~aLeIh<@m/QqQQ+-f[S{7SQJF{eI3U' );
define( 'LOGGED_IN_SALT',   '0(4{,HY1WgAh-_;./B*{VvvUKRs1FcynSZ:mk8;B5:[R`^=zBrn2*)^ V[N]^sQp' );
define( 'NONCE_SALT',       'l|9L(cnp@p~I,[e(CcN_bR1XEg37,V`St158LlBMRC0S(,3shHGq1l}CL@UVeH46' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
