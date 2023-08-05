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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'galeriaBD' );

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
define( 'AUTH_KEY',         'ZE^  pa+xA9f)z?g1pTjLmV7pZTdz ],UDyv,iYXr-}lL)@VD0=r[6[u0>mAY8JD' );
define( 'SECURE_AUTH_KEY',  '(O.A:lYo@>yU%lT=@(c{%Rywm<E82_M0USLC}`4Rx(<,`/WQ=Y%OX_`r0cHx;^GC' );
define( 'LOGGED_IN_KEY',    'EwV1dsSgBLJ:J=. 0`>FnH!vaNMc@aqK2.r=-C#dW8K_rY)a{VwtP_F*1l(Pm,C_' );
define( 'NONCE_KEY',        's/.N(dZu(,=N@>Q?I>VTO0@?wK,Q%^*ga;@{YFsQt~|})&[>{=fOT!]z6ld28#]G' );
define( 'AUTH_SALT',        'zo3/dx;4Z[F)]b>$v#^o;*<+?[<osj:YAGKaNeRM_KJbDPCJ,?{(r=@y>0:nY:S1' );
define( 'SECURE_AUTH_SALT', 'ruqu^0YbZcvrx!xwqn/8Y^~xZ_z<>J|7 )esO3q}Fc S#lU3t&1P9E^$>*4r!,h7' );
define( 'LOGGED_IN_SALT',   'b}8iTnx_(R!XTY9-o35]b=ac{K45O#Um7rG<>wq:_!NU2%|7:nhH.^>v4r/qD*UI' );
define( 'NONCE_SALT',       '&Z@}LdLXutOC%&,;MJs{?y.[1S6Sz-j^vw[_OxP?EE]Wy);FSQG-=H>bg;GFfSg8' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
