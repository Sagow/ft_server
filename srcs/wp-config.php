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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user42' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'USER42@password' );

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
define( 'AUTH_KEY',         'TDa~}t/ei%DlN5].K1$w5H_1F=oE,uCYV4[Pi-0*h,C[>F`=<]hM@<{plc^3@a,p' );
define( 'SECURE_AUTH_KEY',  'E>2-THn71xL+Kr|aIEo@hKJ|=`/S]l1`=HO*=YAE<3]X}*b(O h_-ZN+C)9WuX`g' );
define( 'LOGGED_IN_KEY',    'J>Lx+Ui*~[Pi,JL{zA{o!%#/jF+86_PyT,&)w `vm`=+k~03OI}VNwzQ|3!-QA `' );
define( 'NONCE_KEY',        '7t|MXB zP.EPC>}E-H (UQ#6}>$cJ2OyW9Y7dw!:<}|SbY*p6.$ON#i%A;sk044k' );
define( 'AUTH_SALT',        '0^:j%h/U1L%;i=Xx{?5z#~_=UQbZ06AYf]_WrQ,$KLxIVP]wq`v2Y3VLvhA3x6 >' );
define( 'SECURE_AUTH_SALT', 'IG1Mr}sztH-%v-U`2@2SWb2zV:F5b$/F&QdJ2Iyzhp%:RpfL.y0!{^BG8sDMoaP/' );
define( 'LOGGED_IN_SALT',   'rIxFAOe[ShV ForaVnnM{~Fl~Kx2$Sh-#f:Oz`K4;]`v~/-plbhu=%m8fk~Y8or`' );
define( 'NONCE_SALT',       '-i/r.Z*ZWFNzDP6t7VL&ao2gjJZ{l#*os&QX+v|.{}FRK{K89G}nG+PG}XRZn%B&' );
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