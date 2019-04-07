<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wp');

/** MySQL数据库用户名 */
define('DB_USER', 'wp');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'hjt123456');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@`*GtQh?2Zm,lAuE`b<~O9V/|51/bw=f4S8~f)PY;pyd.9?^u3eS%hw8BZ}-H`K[');
define('SECURE_AUTH_KEY',  ';H<t:HG1^<~ZH#l!nY}=lrX<)GC[jn?{B`%TYZ,)r%^FTk_8#fs(X_EwD84%NUDs');
define('LOGGED_IN_KEY',    'PJ:[k{/Z70?LA{iRz:sk]JPRa4(ES=]cGlq~6MI#X(u#H;K|w[LsSX!uOuhuitfB');
define('NONCE_KEY',        'rG[-&yZDV+^ep[)0_pq)L:Jhq!RY-&p|g8u-SoV-AGtwg0]29/o?6bYCD/Csy#Yt');
define('AUTH_SALT',        ';h4A :Q?UA+J/>+*%.OL6T&aJO&dsx^L7GKLz>5LFCnGp@b(I8Y:@.-o4F~Kh6`%');
define('SECURE_AUTH_SALT', 'Gwg&W<#:AmS8sXeZWia=VfS]e% [@c6&2?/$;e X`u?; W|-TnkkyQ}B>eFIdmU5');
define('LOGGED_IN_SALT',   'j[dPDSScq^b8cMT4uY1CvFDG[E0{~Pc2@9:/*?#y7kmi<s  =Q4s-3((Yii|_wB;');
define('NONCE_SALT',       'C&4 y:LfLKj`;2~P6=(_S67Pk2G(EJNLb*xlto{NB^Z]txsBqx1&RAV/`72^;r?$');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
