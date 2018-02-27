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
define('DB_NAME', 'parisdugenre');

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
define('AUTH_KEY',         'B=YM|;M~B.VT7KmY>r~Sz7Es9Dx.qN8|3h!0D?GE2:xn?XM8[bQXcZ,[B{L[lz|A');
define('SECURE_AUTH_KEY',  '&3beI:O.kE]K/7M]Av).I*={J]/]MMfB#]JZKmA5`YX~{UaNy-hWu8w7v%Zb2Qzv');
define('LOGGED_IN_KEY',    'DXz}Yk-)@6k!1lWhW^BIhABc;?Z.eo4RasCmUDlnZYTnu@h~mf`.tS]d$;(Bf-)g');
define('NONCE_KEY',        'q1crN>,LRQ?9k+~#PbWodtE?q!Il^RazfeHo=l,nJ;K6I&0/~7G_/x9sYoP8,3;)');
define('AUTH_SALT',        '5mR={Eo!f(jHk=1KwR*{CP@SA:,p#|uwzBaeQ.!^mxt7vNx>7OAna?Y@U3CHY`$M');
define('SECURE_AUTH_SALT', 'XwtPkx23V2JSBPLq_CNm0ev6#R<lj&`>Up* cn*&v~(ow/]D;Mt7BY})!Z^4whrA');
define('LOGGED_IN_SALT',   'npB4/w.XaM8!)UW][<DwL<cSJa?~z1alZC&BcmvGPv1QvUq;$Z/fnTW_S,g-1_Ow');
define('NONCE_SALT',       '6M{II@-PbhC@sUsd(v2r^P]n>&29w*wi p)mIv$anl_B^=H3NunD)-LV|l%b}Fv{');
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