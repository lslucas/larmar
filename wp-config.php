<?php 
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'larmarwordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'larmarwordpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'L@RM@R*15');

/** nome do host do MySQL */
define('DB_HOST', 'larmarwordpress.mysql.uhserver.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<lpu4Y JOa62}GW*5f~To(U,i-8fq5-nz^h|$1[+<3c^OfSTNV7RkgB ).f D(b>');
define('SECURE_AUTH_KEY',  'W<k^63+!^owK|YUaX.H-v(1 6&+@*t{c,+`cml^szB:P{v#,A+,L|H_SgB,Tn[iW');
define('LOGGED_IN_KEY',    'vJ0THDmT-|g-,8mF*+,C2Y/B]yC.Gdt!X ;_[VY*NMvlf^}[C9-+zq)m4> lpp_#');
define('NONCE_KEY',        ']IYjrJ^TdZ8RSV5XD++$4(;=q93xt;=#X2]}yB+,N[_!j#m6K<6tRO-p.9N~CZ3Y');
define('AUTH_SALT',        '@@pi~KH-+E(6>hB#2FIZgG&gHxr(+{Rm=[nu80n>3(nxAU/{,s9pZkaEPE:x|F27');
define('SECURE_AUTH_SALT', 'T1/%{Y^u5|pH>Ja`+yCD|Enr2+K|-+Yt/}m:6F*PE[xzH//f3x`!cqQg4lrZ15Py');
define('LOGGED_IN_SALT',   '?mxgd|&`1{6)#}teN6L 8w7}4BzZYowMIXq-?b_x=!#yn}IbYA!&9K0M,+`xZ0%6');
define('NONCE_SALT',       'T)%EBOQu9~9eF|*}bppqV|2q [[;VO|,1]oqT33UtC;Yui#-2:U>0HaKKfHQ,peZ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'lm_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
