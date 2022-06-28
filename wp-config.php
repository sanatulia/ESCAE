<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'escae_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'MblvUqeKH|*]@v7{4eomkqS5uAPGrojMIb}{`])c<!-O<JrkmAm<C^JEu-/4yNX?' );
define( 'SECURE_AUTH_KEY',  ')wuk$Nurc9kXx^;5,:W1$sjjyEop*u?>*ve1h#,$~q;s-Z{#6!rmN2cu63NcH-sT' );
define( 'LOGGED_IN_KEY',    'Pz!Vl;,&}D9A<HLcbW$Y8H/m)g$iL%(C5^ `Q<f:Y<Y2%pZ6qM48ukw79%G8.bgE' );
define( 'NONCE_KEY',        '!0PPATfUiW4xD{+K|rt(wi*|5@LB<,x3GMDiNLr]b4<w7Li:d</}2T^e.62(Jp~a' );
define( 'AUTH_SALT',        'z2}DOs%Gw KlE|l -(`w@TBGp}>:B?pIZdIA3YZ8cS}(0q1c;M0{[.:._p[Y-3^^' );
define( 'SECURE_AUTH_SALT', 'pgc.+<e^t7BZQ *7(>_Ml$)mS=@ggXKL~3x77R2ctMaDN5,K0d]xuEh+h-ST8&&A' );
define( 'LOGGED_IN_SALT',   'IWwVR>vFjC_:oZ*}f3ycfLiYQ|!,S]!be{p<vP/7DJe@[xl$7fQEQT{@%f6toep6' );
define( 'NONCE_SALT',       '4[E7lE}P!bBiWDeXByT-`?(.@U`ljyW$uc}%55{xAVX>Au2S$G`c-]1[E0MJb0+s' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
