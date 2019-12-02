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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'coffeshop-wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'dyj7U[Cn4)KDNkSTY4*XrUU#wZ:iK-n1s|s1J|wyx2R13|A)Fr$,[z``2cvcx%W)' );
define( 'SECURE_AUTH_KEY',  'I;<-:8<>BB{U~GHXTOUBLpX2;Ekz5,NBd*_wzpP+pShyNRA#xP<#!z|YUG8a=c3p' );
define( 'LOGGED_IN_KEY',    'LvWSF,6!K~#&#v.Guq_$Jj},zx{KRTLg*@ZQ,zo?0&Ty53v0B>rRUE2i|gS;Jny`' );
define( 'NONCE_KEY',        '=Qx$k[<Ki3fc-wI339+PZ,IR>L^94Aj.+*cs*;-OyiYYlA?S[9d8LVugS,[B c_1' );
define( 'AUTH_SALT',        'u7jx-)92>VEG{??+0J7~}o?msI1r8SA1LS}YdlM,u6C.bbb%>GXp5AiK^`W6}y-I' );
define( 'SECURE_AUTH_SALT', ';oB~a#JWjVdG9%SD<{nI]AKETX!e1_id*w~&MVo_7]Tk~bs5QF.^-N1}_@!&Uy&(' );
define( 'LOGGED_IN_SALT',   'k5xQwC`hJL~r>q+lgtL$GpMvh^}ogd+sWr0lY%~C2{7)!|0ggs0fA4-T-Zv01xz#' );
define( 'NONCE_SALT',       'v$86?1|.rFRD[vuj&4XlA0L*YiQ9<3jG_dOoTezsgHOAas,,17-g([v|?trc(F]J' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
