<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{

	/*
	|--------------------------------------------------------------------------
	| Base Site URL
	|--------------------------------------------------------------------------
	|
	| URL to your CodeIgniter root. Typically this will be your base URL,
	| WITH a trailing slash:
	|
	|	http://example.com/
	|
	| If this is not set then CodeIgniter will try guess the protocol, domain
	| and path to your installation. However, you should always configure this
	| explicitly and never rely on auto-guessing, especially in production
	| environments.
	|
	*/
	/*
	 *------------------------------------------------------------------------
	 * 翻译版：
	 *------------------------------------------------------------------------
	 * 基地网址：
	 *------------------------------------------------------------------------
	 * Codeigniter根目录的URL。通常这将是您的基本URL，用斜线表示：
	 *------------------------------------------------------------------------
	 *   http://example.com/
	 *
	 * 如果没有设置Codeigniter将尝试猜测协议，域和路径到您的安装。但是，您应该始终
	 * 配置此明确而且永远不依靠自动猜测，特别是在生产中环境。
	 *
	 */
	public $baseURL = 'http://codeigniter.dev';

	/*
	|--------------------------------------------------------------------------
	| Index File
	|--------------------------------------------------------------------------
	|
	| Typically this will be your index.php file, unless you've renamed it to
	| something else. If you are using mod_rewrite to remove the page set this
	| variable so that it is blank.
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 索引文件
	 * ------------------------------------------------------------------------
	 *
	 * 通常这将是你的index.php文件，除非你已经重命名为别的东西。如果你正在使用
	 * mod_rewrite来移除这个页面变量，以便它是空白的。
	 *
	 */
	public $indexPage = 'index.php';

	/*
	|--------------------------------------------------------------------------
	| URI PROTOCOL
	|--------------------------------------------------------------------------
	|
	| This item determines which getServer global should be used to retrieve the
	| URI string.  The default setting of 'REQUEST_URI' works for most servers.
	| If your links do not seem to work, try one of the other delicious flavors:
	|
	| 'REQUEST_URI'    Uses $_SERVER['REQUEST_URI']
	| 'QUERY_STRING'   Uses $_SERVER['QUERY_STRING']
	| 'PATH_INFO'      Uses $_SERVER['PATH_INFO']
	|
	| WARNING: If you set this to 'PATH_INFO', URIs will always be URL-decoded!
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * URI协议
	 * ------------------------------------------------------------------------
	 *
	 * 这个项目确定哪个getServer全局应该被用来检索
	 * URI字符串。“REQUEST_URI”的默认设置适用于大多数服务器。
	 * 如果您的链接似乎不起作用，请尝试其他美味之一；
	 *
	 * ‘REQUEST_URI’适用$_SERVER[‘REQUEST_URI’]
	 * ‘QUERY_STRING'适用$_SERVER[‘QUERY_STRING’]
	 * ‘PATH_INFO’适用$_SERVER[‘PATH_INFO’]
	 *
	 * 警告：如果您将其设置为‘PATH_INFO’,URI将适用被URL解码！
	 *
	 */
	public $uriProtocol = 'REQUEST_URI';

	/*
	|--------------------------------------------------------------------------
	| Default Locale
	|--------------------------------------------------------------------------
	|
	| The Locale roughly represents the language and location that your visitor
	| is viewing the site from. It affects the language strings and other
	| strings (like currency markers, numbers, etc), that your program
	| should run under for this request.
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 默认语言环境
	 * ------------------------------------------------------------------------
	 *
	 * 语言环境粗略地表示您的访问者的语言和位置
	 * 正在检查看该网站。它影响了语言字符串和其他
	 * 字符串（如货币标记，数字等），您的程序
	 * 应该在这个请求下运行。
	 */
	public $defaultLocale = 'en';

	/*
	|--------------------------------------------------------------------------
	| Negotiate Locale
	|--------------------------------------------------------------------------
	|
	| If true, the current Request object will automatically determine the
	| language to use based on the value of the Accept-Language header.
	|
	| If false, no automatic detection will be performed.
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 协商区域设置
	 * ------------------------------------------------------------------------
	 *
	 * 如果为true， 则当前的Request对象将自动确定
	 * 使用基于Accept-Language头的值的语言。
	 *
	 * 如果为false，则不会执行自动检测。
	 */
	public $negotiateLocale = false;

	/*
	|--------------------------------------------------------------------------
	| Supported Locales
	|--------------------------------------------------------------------------
	|
	| If $negotiateLocale is true, this array lists the locales supported
	| by the application in descending order of priority. If no match is
	| found, the first locale will be used.
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 支持的语言环境
	 * ------------------------------------------------------------------------
	 *
	 * 如果$ negotiateLocale为true，则此数组列支持的语言环境
	 * 按应用程序优先级从高到低。如果不匹配的话
	 * 发现，第一区域将被使用。
	 */
	public $supportedLocales = ['en'];

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| The default timezone that will be used in your application to display
	| dates with the date helper, and can be retrieved through app_timezone()
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 应用程序时区
	 * ------------------------------------------------------------------------
	 *
	 * 将在您的应用程序中使用的默认时区显示
	 * 约会日期助手，可以通过app_timezone（）检索
	 */
	public $appTimezone = 'PRC';

	/*
	|--------------------------------------------------------------------------
	| Default Character Set
	|--------------------------------------------------------------------------
	|
	| This determines which character set is used by default in various methods
	| that require a character set to be provided.
	|
	| See http://php.net/htmlspecialchars for a list of supported charsets.
	|
	*/

	/*
	 * ------------------------------------------------------------------------
	 * 翻译版：
	 * ------------------------------------------------------------------------
	 * 默认字符集
	 * ------------------------------------------------------------------------
	 *
	 * 这决定了在各种方法中默认使用哪个字符集
	 * 需要提供字符集。
	 *
	 * 请参阅http://php.net/htmlspecialchars获取支持的字符集列表。
	 *
	 */
	public $charset = 'UTF-8';

	/*
	|--------------------------------------------------------------------------
	| URI PROTOCOL
	|--------------------------------------------------------------------------
	|
	| If true, this will force every request made to this application to be
	| made via a secure connection (HTTPS). If the incoming request is not
	| secure, the user will be redirected to a secure version of the page
	| and the HTTP Strict Transport Security header will be set.
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * URI协议
	 * -------------------------------------------------------------------------
	 *
	 * 如果这是真的，这将强制每一个对这个应用程序的请求
	 * 通过安全连接（HTTPS）进行。如果传入的请求不是
	 * 安全，用户将被重定向到一个安全版本的页面
	 * 并且HTTP Strict Transport Security头将被设置。
	 *
	 */
	public $forceGlobalSecureRequests = false;

	/*
	|--------------------------------------------------------------------------
	| Session Variables
	|--------------------------------------------------------------------------
	|
	| 'sessionDriver'
	|
	|	The storage driver to use: files, database, redis, memcached
	|       - CodeIgniter\Session\Handlers\FileHandler
	|       - CodeIgniter\Session\Handlers\DatabaseHandler
	|       - CodeIgniter\Session\Handlers\MemcachedHandler
	|       - CodeIgniter\Session\Handlers\RedisHandler
	|
	| 'sessionCookieName'
	|
	|	The session cookie name, must contain only [0-9a-z_-] characters
	|
	| 'sessionExpiration'
	|
	|	The number of SECONDS you want the session to last.
	|	Setting to 0 (zero) means expire when the browser is closed.
	|
	| 'sessionSavePath'
	|
	|	The location to save sessions to, driver dependent.
	|
	|	For the 'files' driver, it's a path to a writable directory.
	|	WARNING: Only absolute paths are supported!
	|
	|	For the 'database' driver, it's a table name.
	|	Please read up the manual for the format with other session drivers.
	|
	|	IMPORTANT: You are REQUIRED to set a valid save path!
	|
	| 'sessionMatchIP'
	|
	|	Whether to match the user's IP address when reading the session data.
	|
	|	WARNING: If you're using the database driver, don't forget to update
	|	         your session table's PRIMARY KEY when changing this setting.
	|
	| 'sessionTimeToUpdate'
	|
	|	How many seconds between CI regenerating the session ID.
	|
	| 'sessionRegenerateDestroy'
	|
	|	Whether to destroy session data associated with the old session ID
	|	when auto-regenerating the session ID. When set to FALSE, the data
	|	will be later deleted by the garbage collector.
	|
	| Other session cookie settings are shared with the rest of the application,
	| except for 'cookie_prefix' and 'cookie_httponly', which are ignored here.
	|
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 会话变量
	 * -------------------------------------------------------------------------
	 *
	 * ‘sessionDriver’
	 *
	 * 要使用的存储驱动程序：文件，数据库，redis，memcached
	 *  - CodeIgniter\Session\Handlers\FileHandler
     *  - CodeIgniter\Session\Handlers\DatabaseHandler
     *  - CodeIgniter\Session\Handlers\MemcachedHandler
     *  - CodeIgniter\Session\Handlers\RedisHandler
	 *
	 * ‘sessionCookieName’
	 *
	 * 会话cookie名称只能包含[0-9a-z_-]个字符
	 *
	 * ‘sessionExpiration’
	 *
	 * 您希望会话持续的秒数
	 * 设置为0（零）表示浏览器关闭时到期
	 *
	 * ‘sessionSavePath’
	 *
	 * 保存会话的位置，依赖于驱动程序。
	 *
	 * 对于‘文件’驱动程序，这是一个可写目录的路径。
	 * 警告：只支持绝对路径！
	 *
	 * 对于“数据库”驱动程序，这是一个表明。
	 * 请阅读与其他会话驱动程序格式的手册。
	 *
	 * 重要提示：您需要设置有效的保存路径！
	 *
	 * ‘sessionMatchIP’
	 *
	 * 读取会话数据时是否匹配用户的IP地址。
	 *
	 * 警告：如果您正在使用数据库驱动程序，请不要忘记更新
	 * 更改此设置，会话表的主键。
	 *
	 * ‘sessionTimeToUpdate’
	 *
	 * 重新生成会话ID的CI之间有多少秒钟。
	 *
	 * ‘sessionRegenerateDestroy’
	 *
	 * 是否销毁与旧会话ID关联的会话数据
	 * 自动重新生成会话ID时。当设置为FALSE时，数据
	 * 将被垃圾收集器删除。
	 *
	 * 其他会话Cookie设置与应用程序的其余部分共享，
	 * 除了‘cookie_prefix’和‘cookie_httponly’，在这里被忽略。
	 *
	 *
	 */
	public $sessionDriver            = 'CodeIgniter\Session\Handlers\FileHandler';
	public $sessionCookieName        = 'ci_session';
	public $sessionExpiration        = 7200;
	public $sessionSavePath          = null;
	public $sessionMatchIP           = false;
	public $sessionTimeToUpdate      = 300;
	public $sessionRegenerateDestroy = false;

	/*
	|--------------------------------------------------------------------------
	| Cookie Related Variables
	|--------------------------------------------------------------------------
	|
	| 'cookiePrefix'   = Set a cookie name prefix if you need to avoid collisions
	| 'cookieDomain'   = Set to .your-domain.com for site-wide cookies
	| 'cookiePath'     = Typically will be a forward slash
	| 'cookieSecure'   = Cookie will only be set if a secure HTTPS connection exists.
	| 'cookieHTTPOnly' = Cookie will only be accessible via HTTP(S) (no javascript)
	|
	| Note: These settings (with the exception of 'cookie_prefix' and
	|       'cookie_httponly') will also affect sessions.
	|
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * Cookie相关变量
	 * -------------------------------------------------------------------------
	 *
	 * ‘cookiePrefix’=设置一个cookie名称前缀，如果你需要避免冲突
	 * ‘cookieDomain’=设置为。your-domain.com为整个站点的cookie
	 * ‘cookiePath’=通常会是正斜杠
	 * 只有存在安全的HTTPS连接时，才会设置“cookieSecure”=Cookie。
	 * ‘cookieHTTPOnly’=Cookie只能通过HTTP（S）访问（无javascript）
	 *
	 * 注意：这些设置（除了“cookie_prefix”和
	 * ‘cookie_httponly’）也会影响会话。
	 *
	 */
	public $cookiePrefix = '';
	public $cookieDomain = '';
	public $cookiePath = '/';
	public $cookieSecure = false;
	public $cookieHTTPOnly = false;

	/*
	|--------------------------------------------------------------------------
	| Reverse Proxy IPs
	|--------------------------------------------------------------------------
	|
	| If your getServer is behind a reverse proxy, you must whitelist the proxy
	| IP addresses from which CodeIgniter should trust headers such as
	| HTTP_X_FORWARDED_FOR and HTTP_CLIENT_IP in order to properly identify
	| the visitor's IP address.
	|
	| You can use both an array or a comma-separated list of proxy addresses,
	| as well as specifying whole subnets. Here are a few examples:
	|
	| Comma-separated:	'10.0.1.200,192.168.5.0/24'
	| Array:		array('10.0.1.200', '192.168.5.0/24')
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 反向代理IP
	 * -------------------------------------------------------------------------
	 *
	 * 如果您的getServer位于反向代理之后，则必须将代理列入白名单
	 * CodeIgniter应该从中获取IP地址的IP地址
	 * HTTP_X_FORWARDED_FOR和HTTP_CLIENT_IP以便正确识别
	 * 访问者的IP地址。
	 *
	 * 您可以同时使用数组或逗号分隔代理地址列表，
	 * 以及指定整个子网。这里有一些例子：
	 *
	 * 逗号分隔：‘10.0.1.200.192.168.5.0/24’
	 * Array:array（‘10.0.1.200’，‘192.168.5.0/24’）
	 *
	 */
	public $proxyIPs = '';

	/*
	|--------------------------------------------------------------------------
	| Cross Site Request Forgery
	|--------------------------------------------------------------------------
	| Enables a CSRF cookie token to be set. When set to TRUE, token will be
	| checked on a submitted form. If you are accepting user data, it is strongly
	| recommended CSRF protection be enabled.
	|
	| CSRFTokenName   = The token name
	| CSRFCookieName  = The cookie name
	| CSRFExpire      = The number in seconds the token should expire.
	| CSRFRegenerate  = Regenerate token on every submission
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 跨站请求伪造
	 * -------------------------------------------------------------------------
	 *
	 * 启用CSRF Cookie令牌设置。当设置为TRUE时，令牌将会是
	 * 在提交的表格上检查。如果你正在接受用户数据，这是强烈的
	 * 建议启用CSRF保护。
	 *
	 * CSRFTokenName = 标记名称
	 * CSRFCookieName = Cookie名称
	 * CSRFExpire = 令牌应该过期的秒数。
	 * CSRF重新生成 = 在每次提交时重新生成标记
	 *
	 */
	public $CSRFTokenName   = 'csrf_test_name';
	public $CSRFCookieName  = 'csrf_cookie_name';
	public $CSRFExpire      = 7200;
	public $CSRFRegenerate  = true;

	/*
	|--------------------------------------------------------------------------
	| Content Security Policy
	|--------------------------------------------------------------------------
	| Enables the Response's Content Secure Policy to restrict the sources that
	| can be used for images, scripts, CSS files, audio, video, etc. If enabled,
	| the Response object will populate default values for the policy from the
	| ContentSecurityPolicy.php file. Controllers can always add to those
	| restrictions at run time.
	|
	| For a better understanding of CSP, see these documents:
	|   - http://www.html5rocks.com/en/tutorials/security/content-security-policy/
	|   - http://www.w3.org/TR/CSP/
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 内容安全策略
	 * -------------------------------------------------------------------------
	 *
	 * 启用响应的内容安全策略来限制来源
	 * 可用于图像，脚本，CSS文件，音频，视频等。如果启用，
	 * Response对象将从中为该策略填充默认值
	 * ContentSecurityPolicy.php文件。控制器总是可以添加到这些
	 * 运行时限制。
	 *
	 * 为了更好地理解CSP，请参阅这些文档：
	 *   -http://www.html5rocks.com/en/tutorials/security/content-security-policy/
	 *   -http://www.w3.org/TR/CSP/
	 *
	 */
	public $CSPEnabled = false;

	/*
	|--------------------------------------------------------------------------
	| Debug Toolbar
	|--------------------------------------------------------------------------
	| The Debug Toolbar provides a way to see information about the performance
	| and state of your application during that page display. By default it will
	| NOT be displayed under production environments, and will only display if
	| CI_DEBUG is true, since if it's not, there's not much to display anyway.
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 调试工具栏
	 * -------------------------------------------------------------------------
	 *
	 * 调试工具栏提供了一种查看性能信息的方法
	 * 以及在该页面显示时间您的应用程序的状态。默认情况下会
	 * 不在生产环境下显示，只会显示
	 * CI_DEBUG是真是的，因为如果不是这样，那么显示的东西也不多。
	 *
	 */
	public $toolbarCollectors = [
		'CodeIgniter\Debug\Toolbar\Collectors\Timers',
		'CodeIgniter\Debug\Toolbar\Collectors\Database',
		'CodeIgniter\Debug\Toolbar\Collectors\Logs',
		'CodeIgniter\Debug\Toolbar\Collectors\Views',
//		'CodeIgniter\Debug\Toolbar\Collectors\Cache',
		'CodeIgniter\Debug\Toolbar\Collectors\Files',
		'CodeIgniter\Debug\Toolbar\Collectors\Routes',
		'CodeIgniter\Debug\Toolbar\Collectors\Events',
	];

	/*
	|--------------------------------------------------------------------------
	| Application Salt
	|--------------------------------------------------------------------------
	|
	| The $salt can be used anywhere within the application that you need
	| to provide secure data. It should be different for every application
	| and can be of any length, though the more random the characters
	| the better.
	|
	| If you use the Model class' hashedID methods, this must be filled out.
	*/

	/*
	 * -------------------------------------------------------------------------
	 * 翻译版：
	 * -------------------------------------------------------------------------
	 * 应用盐
	 * -------------------------------------------------------------------------
	 *
	 * $salt可以在你需要的应用程序的任何地方使用
	 * 提供安全的数据。每隔应用程序应该是不同的
	 * 并且可以是任意长度，尽管字符越随机
	 * 更好。
	 *
	 * 如果使用Model类的hashedID方法，则必须填写。
	 */
	public $salt = '';

	//--------------------------------------------------------------------


}
