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
define( 'AUTH_KEY',         'QTRpl2aec[:.nznDI!.ho3;>0%q7m}>:otup*|cw8Pr6j$Z`8tw4,=px9QNg$p@4' );
define( 'SECURE_AUTH_KEY',  '4T8kgjZGf?0FFz]M32;pQb%/^2xLWf *Qw`|9&Pb@[ba}70[M9LBVWII~YBR#%yF' );
define( 'LOGGED_IN_KEY',    'J{!<.NNBR):<9Lu*d#k=Zb: qB6%I{$r|pZw0yM+Q:hehKN5J?n3oi@7xQ{FIY]~' );
define( 'NONCE_KEY',        'E.tu2=)[$v&<Q.^TCx{3sAW-#Fwz:R|Jh_bmYrj*uUhIn!Ic4s)R$m&J?qm]-^+%' );
define( 'AUTH_SALT',        'zBVv9vP<_v D[EFS!,`oV|yhZmz/iQ}cB<7m>?(XcI*j=6e:{ (RITa3-[ae;Q<)' );
define( 'SECURE_AUTH_SALT', '/4<icwvv]fXqg/B-=8gv0}cz&=_|TvcJFD3R$.I}1M`Y+9E&KXlKo$tO^ hC;#d4' );
define( 'LOGGED_IN_SALT',   'C>L~Zq$/241_>U9dl9_TQE`W%5gh(}a(vfrtdN-)`pl mW{:4$n,hBD,^A-wX5;}' );
define( 'NONCE_SALT',       '%8lpdPMa-rS&<6Tc;<7aZJMzk{{.P#09yI5j6Y0/eYi.br^=8+-ER {@Nv@L}u}S' );
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
