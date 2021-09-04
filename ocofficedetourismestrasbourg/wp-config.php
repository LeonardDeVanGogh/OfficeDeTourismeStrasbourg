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
define('DB_NAME', 'db769217076');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo769217076');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'azerty1234');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db769217076.hosting-data.io');

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
define('AUTH_KEY',         ',4hygX^7f}kGovZ* !y!kv8{0%1K8}fC,cuX/hNX(He[^tp7m{e$?hhRU0+}dpk6');
define('SECURE_AUTH_KEY',  'h96zSDI[gZ&i;O<GmW(5q9~a{C&rtK9DXxJi6}iIU@ tKT;@&VUcpM%qo<xxh#mA');
define('LOGGED_IN_KEY',    ';)?w`1GSx ;XUC3u} &34K`BlXLm-)rC??]rN#`Xh#S!!c7}7QPs-eTnGRR1qn+=');
define('NONCE_KEY',        'tg1?RD?8&K=in~UJt&;Le6=l*jE5&Z^+~-JE&(nRzrjkSOI{a),S:?cK`;W3b`7+');
define('AUTH_SALT',        '|q=`jh7VB?.Z 2W*`@lt;@vO ]W>(QDR%v3hu(3;5,s*YG&p_%h+_ejk)y=Rg44s');
define('SECURE_AUTH_SALT', 'VQ=[ci=1JK>uoYvB!Au!nVKf5]wCBWx>.zJ;RtU>i4Z2yn{TxF1+yZE]+fxA:$O8');
define('LOGGED_IN_SALT',   '2YUM^=7SOi_iuT{>!,1JKF.}uyKz. TqkHjl~.P}^b1{DUQ`Hpt4O0f=:q4qK=Y3');
define('NONCE_SALT',       'RW|yr<%GAvr1xh)Ub6tcv!3|&)Y(1?JRdu!]f;X&ku=i)L4/apSyI|}FFetM!E5>');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sxb_';

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