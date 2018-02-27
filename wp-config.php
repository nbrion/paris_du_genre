<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'paris_du_genre');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S*nr{V IoDG*_H_yAj-99@2WT]gQr>B8YS2$btOAnKyiTgmo*Ld0+?W.r#d*OQvO');
define('SECURE_AUTH_KEY',  '$|m?(Z4i%[tHKT6nGy9Vh9emCBn$d=p{dtlsP@d]EfC;nCT5gmOmhTB J;3x_g >');
define('LOGGED_IN_KEY',    'Br.{4 XPF%^*#PKS&q|f?M4Kl?j/]S#5[i%Y*1+kK}[[rM?Q^rX:2@GETYz~W-%?');
define('NONCE_KEY',        '`3n2n8WX t:X4l_&g$|/d>140pckdxg7%KKjcrb60!ToO%t:4,HvxDK-u^_ q0:C');
define('AUTH_SALT',        'hKPd{R}XS{? L7u$T[OBL.8JF/2CI7Yw#tJR&.EUgM4`S03(y88ReUf[3Z=Mk|zB');
define('SECURE_AUTH_SALT', 'X6i#JZ&Xre}yH!Tp0gSgA9HrvrIcwJes#&WL&eIL9vrXr#udnKgT)V>oDUysCj{~');
define('LOGGED_IN_SALT',   'lRdx`A0C|`FSZzA[R:0]A(TK/.xrK=Dm0T!}T^2^lJ?3.CC_vK(CXm/WW4,f_~fD');
define('NONCE_SALT',       'KhW+[K(ljVD# w1!#DCsg(aijc+jdUkVouRnhoqP*3~?>}rF5~uleXgs5Jy6$kd%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
