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
define('DB_NAME', 'bdwordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'u>5{UxY#O`s6@tgbMn#rK;@Hvx|nZk4tw_mb}SFrsE.Kd<|ahaA1m@rPttr]6=Qc');
define('SECURE_AUTH_KEY',  '.Qrjf3?d(o2D%&IIP(djz#L(o--:/M~;U&WLh/lc~UK)F]&!1+7YjMq4w~eVLBmy');
define('LOGGED_IN_KEY',    '(wKRA;nt)K+?AoR%<%4FS(/lXK-p7%8Z9v .d1Wk]r&G_b6}vR3+XHV?V47G_kjt');
define('NONCE_KEY',        ']+g2v[@(8:-qk7-7N/efNzd!-X]5b/C>`|n,O&OUE.6mRb6w(5xb~IuHo1XFGRw+');
define('AUTH_SALT',        ']^Aiy>*a+ok+kM){il2WiS.Zpc2MR-kfs{QL&+xlw-(IUP39tEo=_sySQSVA/jEq');
define('SECURE_AUTH_SALT', '+NdPz#K+@j9AI`n.b-(R|-+$ iBB t!,^H;u._`NPUGcq2I55[-xfm0{+I-0rI]C');
define('LOGGED_IN_SALT',   '(+~b.J#h_o_=m{F@l+6n<CRT^y!|[W?CwH<%N{;$P/np]9ttU-?uhYlABb_tlA0c');
define('NONCE_SALT',       'k3FU7=NTQajVh%W,g=K&+2!;A^_k2)J7YUEJJ/2;R6t7Taz:z>Y$z/*#Z2cG`Q%a');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '1406wp_';

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