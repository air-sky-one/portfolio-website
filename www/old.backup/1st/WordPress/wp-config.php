<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'alexandrljwordp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'alexandrljwordp');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'V1Cd7lzS');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql5-24.perso');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3c<MUv{=i#ofFA&KY!|{$J2,Hk<t||7+X<Dk ahvW%|f,%3<P.|zNG+:NSV`}#S7'); 
define('SECURE_AUTH_KEY',  'N:Vr8O0/Z*u9+Q=f~A|xfeFhaF!Z)gKFtGbJ~(=8JgkV^T8)k,.]u`8d}Rf]5aQ5'); 
define('LOGGED_IN_KEY',    'VccYz6+f7FfL=Umj4)efS#[K7/gUGIe7W{c7U379Shp.Q(cabSps`f+ ],=L+Q5Z'); 
define('NONCE_KEY',        '=VHOl8G<-kN`#UYODu=zz6w<|1}SgP;Ev3Yt(dJ)H0xl[!}Q<};?fCM$);Nh6b.w'); 
define('AUTH_SALT',        '|N-m=j~p)+)[4OI9J;f$tIkt1zo2DZEe|^&#cBG1Ath@D<RB,5!;=hLAg4MHq$+n'); 
define('SECURE_AUTH_SALT', '4?4+p+&QbhF#7a.0GPt6+`.b~=K-?@-YNG}WRxF3.lt^eK6+5?^cg0`ALs,=4Gy6'); 
define('LOGGED_IN_SALT',   '`ui]<exc$n^4gUv Mc4#|X/$8R:LQ,Tu_yx|HFUw-^XPeU8J-r/8mcc0k5gcJZ=j'); 
define('NONCE_SALT',       ',lyvo9D[|QUTjfQ*-Ks**2&XHq+x(wx;1P+w~74MWL:L`~%1GP$R+[r)kifvLA6W'); 
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define ('WPLANG', 'fr_FR');

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