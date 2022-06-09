<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress-project' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1lUado)8nkf,wU2!tCQhF1iks un>5BRGg_7}^fx%Cgq[unpq&L9!zi1v9>X{sc6' );
define( 'SECURE_AUTH_KEY',  'A`ilB$^8]qq4[cZv=cgkjcC:ol_2%>Wzt=]6OK{-*h#^njYyfGysB~h%HYa<mGF_' );
define( 'LOGGED_IN_KEY',    'R?ZX{gIHxxnm#`S(qJsF0#zXyX)Q$I+x;l3meQ*.kb!Y0&mv~cpR3f3Yh{yC>Dn5' );
define( 'NONCE_KEY',        'o|o|Q8Le]<Kz`|@`am(![-:3`u-+O2i5xnyJ?Sy-M)6L/}<iBYiK6.OqOxeG-b$Y' );
define( 'AUTH_SALT',        '*6%Ap UpnHg1S`i9N<*znOyKM]9k-t8LhlC|`,I]8rCL2Am4c0<@9hiwF%KE5{B@' );
define( 'SECURE_AUTH_SALT', ':M]1dsW|<S|NK0/z|it9~t51E8X]7zPm7(KKPAHJ#WtK6[&RfE,~u#FUUS&B/CGK' );
define( 'LOGGED_IN_SALT',   '[2Sk-wS-d17V1`Ax[AJ~;--W)H@MWM;15I+=[GIb1k8& jTPc&JWT0!D&%sq|YxJ' );
define( 'NONCE_SALT',       'nMkROj,/Z{VwoR:Hmg*(d1M$Ie&6RO.G 43HK8%H8]`Ah2xkqLA%HE7JY}>l44C(' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
