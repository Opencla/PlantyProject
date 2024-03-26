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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '[Lgz!d8vD KxvK4Ly*hHo9p@!T(Z)3WjY gkg7ViNA(Q &1LS+17hy;4z)HB}-@!' );
define( 'SECURE_AUTH_KEY',  'E<b3;gS;6J||@mmgQ!.ODQbA$0?Nc$ W7[v~xxBf&W;!PSGr$#T*){q-B%o,g2k8' );
define( 'LOGGED_IN_KEY',    '$PiOFe!dK!H{qv_5S~eD;0|N:6.bts+P/wDFjwOMES]YL0A)w#a.9~;r_bPej7TX' );
define( 'NONCE_KEY',        '-XQ~18-jQ3;VYRRH$h55z*MDMM|b1&=9N.4gZqeuX(y_wkE~S(k7~G%b_1gMe$t?' );
define( 'AUTH_SALT',        'uJ;}t%V8ZWr8)s&V90$xq.Q2bf!3DUbw6sau[<nNoI-Y1[v|oJRH[T&iWW%WTuAM' );
define( 'SECURE_AUTH_SALT', '33W.O*;0::Zr?LX5z~50z^<FE y~:HH=1mlWo|sBjv4x+4KGbSC]h0mf=%.IDNi{' );
define( 'LOGGED_IN_SALT',   '9pMspW)~Y.<]sh<D `Hf`;w8P,w^V@9rGS{dkkm^ 4O4PALmS+JiK0.qkPO Ru7=' );
define( 'NONCE_SALT',       '9`ikhckl)!~6S>z8y%i{^^9qMY&b]XD3KoUZxBZUC#;0^kAhW#tMac,ANT,UsVi(' );
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
// Active le mode WP_DEBUG
define('WP_DEBUG', true );

// Active l’enregistrement dans le fichier /wp-content/debug.log
define('WP_DEBUG_LOG', true);

// Désactive l’affichage des erreurs et des avertissements
define('WP_DEBUG_DISPLAY', false);
@ini_set( 'display_errors', 0 );

// Utiliser les versions en développement des fichiers JS et CSS de base (seulement nécessaire si vous modifiez ces fichiers de base)
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');


