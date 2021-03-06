<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'onner' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sD[};< v#JO1:G1@$9L+KoFxp$h`p:iF78DM!<BIFx ^$zAk$J9QYe99!7j&F<p=' );
define( 'SECURE_AUTH_KEY',  'qHzTy%z7@*)G3rR f!iQZ$wuLD8%PCR3WBkc)UMWE}Y uihAAm}]gsG%<8JQ@0O!' );
define( 'LOGGED_IN_KEY',    'R>p)WZvslbm8>OlYj2YU6wNct,0Kv?!([ S`1^4I`HL=>fR-1EgxFv^Og-/.zH;&' );
define( 'NONCE_KEY',        'nB|zNx4Jp`cqs>I%JGqS)pcs[%_yQ4eL[ezvGmd<vpt//y/UJ{qfn3|S(e2y<<-C' );
define( 'AUTH_SALT',        'P`DeuiY3npZ1;e]lxffekkZTGVF^3R%wYJh)p{:~d{=yBD3<90knyJogCV:KW`?@' );
define( 'SECURE_AUTH_SALT', 'x3?R0|ef0}xm:JoL[h@p{?O:.BF*+p6^6#Cb Zt$hAgHtTMsk+v/cT%Y a$Ggn!s' );
define( 'LOGGED_IN_SALT',   '${@/C5,[xis.SynoTpqQRN/?^Isb}O.y5DT#Iuzb}i9z%vr=*gY_tW+T~sl9fhsb' );
define( 'NONCE_SALT',       'B^JNU:b=~nAvAvYw@Y>~~Bl1b9E-0{ WY^NtS^{<th-[M&4|3RSLYL`qWy8H;Cem' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
