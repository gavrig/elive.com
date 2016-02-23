<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'euro2016-live.com');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'gavroche84');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v%@F3~--;iDXxOlwR6_j=INUDH< {<U|yg_X[=M&=|ry^L?qQ/0fjbLF%)n`B%Fq');
define('SECURE_AUTH_KEY',  'D}qu2e5It*-~y%Vk{ww/U3)HK$8hgV vxT]Gc@f9@.r|v+(|s;1E-0${H01v=4-=');
define('LOGGED_IN_KEY',    'VEn=o=({*y!)e3wj5Lq9=j`W~?&#/7Y:_!uQr4~utlY@~Wz!*)~i&!^.S3+<V>V]');
define('NONCE_KEY',        'wJ<9G.GEq0wzbyG/CYI?Sq|qft@@P1Vf*`1o>-Kq#^`ctRbyBkx/e^x(hg2[aDZO');
define('AUTH_SALT',        'O2S5BWd=LV7EYY@Y^.ua3:2>&?;9k_zvji{he3%qO);GRWh,>$cUI%kXYJ@Nwk;u');
define('SECURE_AUTH_SALT', 'OTixdvDjjU^AlG^ao>o]:eIQI)21]VXl?LPBL].k)((?<JD8FKk]F{5q#UD$a:^9');
define('LOGGED_IN_SALT',   '>aHCgHthc_Kt$<e)1U!+17Nw!JfIOF4Bq)T0YYUTHVK;P06QdI ;ucz1rC[9}Ikx');
define('NONCE_SALT',       '$!bGnT=L25YW}U(yY0kcsz;Y*D&9{&etb2%gt0R#@FmCTp~GtEeOf{DgTFYA3}tm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');