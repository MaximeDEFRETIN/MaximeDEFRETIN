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
define( 'DB_NAME', 'MaximeDefretin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'AsBc80@0' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/** Cache pour Wordpress */
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',         'h2cRm4Sk6rSuF O[pY1od4C|B|&I*] eA*85cPq)SJ`_o6Cxlgo|EEMfb&n4/,f`' );
define( 'SECURE_AUTH_KEY',  '%]Lm-XhG4x53I6* K?YeB2fl]r}:YX<,(LNJ jiXop@v//[bJLu)dHxnxSD8W@Uw' );
define( 'LOGGED_IN_KEY',    '0[DE{Vz#N7rXZ8]_M](axG~q:H7>uOgG$-i&>wE<IJI~ht1Ye`?>sqh:0IX4Vny,' );
define( 'NONCE_KEY',        'D>7K!DCAI+)A?)!7gE|-^#~T%]]f<zj21(Bm&j9;G2lMZk8j0tz7XQKNn7KQ.&ej' );
define( 'AUTH_SALT',        'b1l=5+9TL<|!#vvn,AovhFy;#F&mz+}QA5xDVxpqJuc25u_q8}.FnLb~6NHMLQjZ' );
define( 'SECURE_AUTH_SALT', 'J}g*~ N;-ra DQnrMKa K!~[gZJ,nHLn0ZQi!wl;1%8I)c_g%v1{) /&n&4+Bac[' );
define( 'LOGGED_IN_SALT',   '|-=N1,*m5ie&FR#*dK5:JOdQY8oZJEr$19jb#WC~q77d0:HBxK4@d6RwFCu#oF#8' );
define( 'NONCE_SALT',       'xlpzQ|xH]zTK15G2F$Sc`%=04Y]r:4~a[&RZ[.ZIz>>.]Zkm6=mH6~2RPuy8_+#;' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
if ( ! defined('ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
