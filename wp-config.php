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
define('DB_NAME', '45388752_db');

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
define('AUTH_KEY',         '4zIW#~+/`oc+@8HL`x@`SDi|X%|Is56iJz)uC0K4&a/Ck1T=zR8K9c`,,C BiWv^');
define('SECURE_AUTH_KEY',  'Js-ezKtyk#pvy2fh4)+j3]OJi/+q:^I YFFTV*GtRH04it?0im=Z)Bw@/k-&HG2c');
define('LOGGED_IN_KEY',    'IAF*&.o=XRI},pBjeoNAKmcV0p#bW7A cRnU{`{)+Pm@&dw=d>jzl}v=Bn*hUbdr');
define('NONCE_KEY',        'uvoj5xD#6NCs;VwfL%rQXOgF[+y,!DS:g1GDA~_U,;s6U]imb)?0z{6z*bg9)+b*');
define('AUTH_SALT',        'cu4L,h#a[;P-XPyHta:,R76s?_o^3*[|I?fX]7(^./%ovIC[gR7r8_/5< d>3QfD');
define('SECURE_AUTH_SALT', ':X|4*J}h)$~^Jhg6,+KxX9M/Sf?:x#bN`H@cw&BzpQQYlZf!qe,S)w&XNe7qiKs-');
define('LOGGED_IN_SALT',   'S~-+1-a6OdQ([fv(9uF4PXlW0&Dw-wGl U5yQ[z]MRGp!7K+idc=KPBXV]QE&;c|');
define('NONCE_SALT',       '.D*5QAR.`WIc{a=utXLCIq;2S,;}*DIK7h;w[TYpeEJXirYgWL^ m)L2;kKY@x~0');
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