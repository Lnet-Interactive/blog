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
define('DB_NAME', 'linaya_blog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'lnet2015');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'fSG@ikk!q-E+/oafAJN-*6rdI_?1(S2@S@k]||)mCa@u3b&MerF%V Sc!h-2/zU/');
define('SECURE_AUTH_KEY',  '4`] Xv~UZDc[zClGL()Wb9UR79pEGWXz|b7Q2e!^Ag>B%zYZD|U):B@l0)6,( ],');
define('LOGGED_IN_KEY',    '|Cy RlL-Q3sd]^qrlQa=S-+361I*fE}8.@rjVM0~Y:i;(@%~3>8]G!L?38$JB%9R');
define('NONCE_KEY',        'NTw{SQjhGd|s,2g@Yw<4P%7wJ;9Zvq<N:E4Lk c]c9.8(,wv Is0xS[$|;BL=FEg');
define('AUTH_SALT',        '7QF#3Jc kSR#F%C4]Md)Q8y3#D I,H@GW1!?-~~sk;N3?IDA66E&j?5Ghq`IO7+H');
define('SECURE_AUTH_SALT', ']7W(QqN52>R!`(O!8T@q9stF-=_ e9ZzPLr<iP%khn0},Cm_hbvmGaoqs5W,|L+2');
define('LOGGED_IN_SALT',   'PDft2t5;t%iex!{:n9W>?>E4AHp_jg+ ;dR(-Xs8;xKZMP.9|=/u94=(2J>P[-ad');
define('NONCE_SALT',       '8S~E#pnn E!t<G|7P$.d$s<&-BE3$_{[vv`n_}7uG.;s| ywN|-SQROAAY|o++eh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'linaya_';

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