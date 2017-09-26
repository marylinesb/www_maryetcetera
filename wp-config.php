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
define('DB_NAME', 'maryetcevg50');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'maryetcevg50');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'SesameWP1984');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'maryetcevg50.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NX0:(#M#s}G{!Z^09Z8i@hsi-R%NLayu`LSvI(qr)0]Y{xAj]!Vcj)@v#V$dP][;');
define('SECURE_AUTH_KEY',  'aFfnCPZ!gB#f(9bRV`:PnUj8AA]nlG~`wp14JvyQc]-^^(4#l~,i>}=#V&,EpN%x');
define('LOGGED_IN_KEY',    'i_-=FqL#gjtoM?W{:>X*g]cj*J5HupT<d7Be!m;#E$rEu1w5aTb0Z/HrXU8)HFcy');
define('NONCE_KEY',        '.1#I?m *zNy0s9,i/W@~Mj43]|Jp.-!IdwXrTp+Dz]}JIH]/JjzGu;TW7J}` &l6');
define('AUTH_SALT',        'Jwk_9,t_{#46z0#.EUoT L]^Mozj-6bx5AJr!6aIRb2yX@pD}&v$oYF;I =cZ+tv');
define('SECURE_AUTH_SALT', '|GRM1C=L)4F$Jv^LmxE({#da%Lg];Y$M)3Ei:~V g~Be-:c}/oXqaqCXBC4/VW).');
define('LOGGED_IN_SALT',   '>^*Fkvw#+#R8eiUi_K69<ZU:G0orsD?3:tsuMttiG:},q$nI|MM*)=($NA|Hq,@7');
define('NONCE_SALT',       's(Wd/hF;3<<ejn?P:,uN:sPrJN0wl9R:vhEVR9r@zzfU47K#8]fdoMZWW:;/ApI|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_1';

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