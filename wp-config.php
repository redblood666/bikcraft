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
define('DB_NAME', 'wpdb_bikcraft');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wpdb_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'uvrB07ulY%vyL%?$p&>=iN[TFwQrW.-nrj+|6a3Y;:&HV-,JrQF_Al--Q[*2-<D<');
define('SECURE_AUTH_KEY',  '2Ei:Ne*FEJU?CDEKN]1Q8nhPu9avH+jP:6D0$YJ+ouFB)F u<w .+M 9l2D=!,ij');
define('LOGGED_IN_KEY',    '(G/%iC><jdBeNZ})=e<fhm[/I&w($;e@hpu3a78VZ&ULo.$+3c0Y:b(|N%mtorJe');
define('NONCE_KEY',        '9LO;RMi>88:K{ik4iZNGwqbHj6MxL!I2D0vsFF+Q51eD#$G^^EO<EfVJT%?hU$K?');
define('AUTH_SALT',        'VfOh7/wlE}adCXW(F?A.sX(BG(Cr}I#5a-q)EjLuhK!BP;yA!~me+>J:r6v!)vF+');
define('SECURE_AUTH_SALT', 'x%WSF z(Uo@3|#m29]}^eqTG7{oxd?RoE/_!/6f3Av#*7(~fA$MK9atyiPt*d:{=');
define('LOGGED_IN_SALT',   'A^2S[IyPoTq/Ncjb]$-=Y[CO/`Qf`&^Wa6wJw}Yf}JKRb86 z]-x,(})M8a72_>l');
define('NONCE_SALT',       '.|&azgpzCWmThE)R)HohTR~#|V5+X2)QvLIpOT:dK(*$INfr:lPz!hUk!;(Ql;:S');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
