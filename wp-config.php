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
define('DB_NAME', 'wp_iniciante');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'UJs83s9EaP687*OuG(}Wc=$T%IWXY[-B(YDsQDw3=,^{z8){g+JGG(4,0F&0yF,K');
define('SECURE_AUTH_KEY',  'GJCxachN6)}po~znN2MlTj nf,~5GNY[Sy.[iO1P`8c?E+`#-Dif=/R( Q18z;)H');
define('LOGGED_IN_KEY',    ';G!c-Pt9v^,`s&g,CK)6xAmK9QP~Rdbm2YR.v^I*ueT[CZV3[*zUa]Mbf>sM?+r(');
define('NONCE_KEY',        '-r{z%=@MFrh=(<R`k+.V`VG?k%Y3<<zxp7Q^8AImHW ]?0{9fN]Vw~S(NhJoz{d>');
define('AUTH_SALT',        '85&q=uG3uKqWiJB_AH7<VflJ^}t%3|wKc3O6nE1z74<3go]f&28<LgBNrFNsU7+v');
define('SECURE_AUTH_SALT', ' <=>^@,k7k@rNqrL>5t p58%KDX)+G_Eo>jY@Y|e&W[M-D4b5sDXFY`-bO1wlcGZ');
define('LOGGED_IN_SALT',   'IX%a>=2?#A#HAEy^u=ikvG_?7{o2sAlF]Lx+rLKZ[m/`4k3}(_LmZ&+M@>//PmEV');
define('NONCE_SALT',       'ERd)|>3,r8=Tz0J<By&V40(u=_PD:s-)g,G`&w^_ArlA$~<cN DH0~IffRxEV}b ');

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
