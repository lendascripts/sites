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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '2018');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'kyMW^|;3t{BDJtjyBA@1?e#Z4%|<eIDo*xH4?VY ]aF-t GK*##2Tbs|t[8LYXfM');
define('SECURE_AUTH_KEY',  'VPaF|G}(A^ly45rXfo.n[$Lh),<mEV_P<efxOiO{XEoK)}W*/6Gb9q{T~>)>-e,o');
define('LOGGED_IN_KEY',    '*v@B}%j uQ4j.oLx|Skd!zn,X/`,=?@]qukdC6=)u+y2q,{X^L5(rkNz Hvv/kJK');
define('NONCE_KEY',        '*6g|^^gz +/1<SUKG*c3sAdHnrY*H@X}5gonNsA~7{ID|K_hkZq^$@1+LrgaIDk=');
define('AUTH_SALT',        '0!_qSH1W.P%fPezOd$M4yr2o-l`}ujv9z&o5acb0a_lOpdX1?>X{Tj]`&l[8nYfR');
define('SECURE_AUTH_SALT', 'JT:6JWw_QBlqDP;sZ7x8dUtbHwV@!QT4=479});GBVs4+uE 5/{}5g0Pu^XVVQax');
define('LOGGED_IN_SALT',   'fUL<4QrDW8&}zurwBxi3J1Ncsn!OBao$KbC;3S-F&m!RObP>Y!kabEk=>aMDsnOB');
define('NONCE_SALT',       'JTf|nv$KZ&J2G*L_L(CaY17uQ](`ELh_,`cm1/+/1[$<AvJ{VKRL6C?b?@oT,z?h');

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
