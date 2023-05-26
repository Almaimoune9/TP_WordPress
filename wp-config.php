<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mon_tp_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Y`NV:/cyk?hIkxMr5qfJ(Ufvi8]YtCS=,9nk*e/Aaxg4J3OOz|s.cdRW^J=rd@ 3' );
define( 'SECURE_AUTH_KEY',  '=D,Y:X03-3EC{z6Aly$!:f[G76&8v8V>DV6`VB-lqux c~845:GPbFD=Am)1]Dx)' );
define( 'LOGGED_IN_KEY',    '99`dG8eqKuY+gF.aJM9AyQ[wBom@VguvKENBsZOc]6,>Vl%&T9r;xKI3S6`2?gS(' );
define( 'NONCE_KEY',        ' q8}7eSj7wXdiPE)47k[+m3<8(2svgVtk:CIKKwDCR ))e3J%<S$VbGTTo@WSK[)' );
define( 'AUTH_SALT',        'kc?_+Nl*yqCHvcz;V$9f20-6K~=[b3bDa5UB2^Ex$JVwQE)Y?NoxiR2[fc:M$fh=' );
define( 'SECURE_AUTH_SALT', ':,*5O:m$PkssYG<c~+kHidfZO^m5qt>Z pwXc<anQP0zi1|W}Q],B:75lNjUD;42' );
define( 'LOGGED_IN_SALT',   '+N>S9vg&}.*%lk^TrxCeSG-[A[#XO`[D6OF~Pnv4h_rZU(Q3Wdl;E_6x@HV6Uj@,' );
define( 'NONCE_SALT',       'hBg/_PaP+BJossA!nzBEr)(J?t*wt}.)s]P^^uG)|S. 3%D,C!dD}wV1J8Fio$4b' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
