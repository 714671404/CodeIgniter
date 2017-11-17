<?php

//--------------------------------------------------------------------
// App Namespace
//--------------------------------------------------------------------
// This defines the default Namespace that is used throughout
// CodeIgniter to refer to the Application directory. Change
// this constant to change the namespace that all application
// classes should use.
//
// NOTE: changing this will require manually modifying the
// existing namespaces of App\* namespaced-classes.
//

/*
 * -------------------------------------------------------------------
 * 翻译版：
 * -------------------------------------------------------------------
 * 应用程序名称空间
 * -------------------------------------------------------------------
 *
 * 这定义了始终使用的默认名称空间
 * CodeIgniter引用应用程序目录。更改
 * 这个常量改变所有应用程序的命名空间
 * 类应该应用。
 *
 * 注意：改变这将需要手动修改
 * App\*命名空间类的现有命名空间。
 *
 * 备注常量：APP_NAMESPACE = App;
 */
define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Composer Path
|--------------------------------------------------------------------------
|
| The path that Composer's autoload file is expected to live. By default,
| the vendor folder is in the Root directory, but you can customize that here.
*/

/*
 * -------------------------------------------------------------------------
 * 翻译版：
 * -------------------------------------------------------------------------
 * 作曲者路径
 * -------------------------------------------------------------------------
 *
 * Composer的自动加载文件预计将存在的路径。
 * 供应商文件夹位于根目录中，但您可以在此自定义
 *
 * 备注常量：/home/vagrant/Code/CodeIgniter/vendor/autoload.php
 */
define('COMPOSER_PATH', ROOTPATH.'vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Timing Constants
|--------------------------------------------------------------------------
|
| Provide simple ways to work with the myriad of PHP functions that
| require information to be in seconds.
*/

/*
 * -------------------------------------------------------------------------
 * 翻译版：
 * -------------------------------------------------------------------------
 * 时间常数
 *
 * 提供简单的方法来处理无数的PHP函数
 * 要求信息在几秒钟内
 *
 * 备注：
 *      先用defined函数判断常量是否存在，
 *      如果存在则不进行下面的赋值操作，
 *      反之进行赋值。
 */
defined('SECOND')   || define('SECOND',                 1);
defined('MINUTE')   || define('MINUTE',                60);
defined('HOUR')     || define('HOUR',                3600);
defined('DAY')      || define('DAY',                86400);
defined('WEEK')     || define('WEEK',              604800);
defined('MONTH')    || define('MONTH',            2592000);
defined('YEAR')     || define('YEAR',            31536000);
defined('DECADE')   || define('DECADE',         315360000);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/

/*
 * -------------------------------------------------------------------------
 * 翻译版：
 * -------------------------------------------------------------------------
 * 退出状态码
 * -------------------------------------------------------------------------
 *
 * 用于指示脚本退出（）的条件。
 * 虽然没有通过的错误代码标准，但也有一些
 * 广泛的公约。以下提到了三个这样的约定
 * 那些希望利用他们的人。CodeIgniter的默认值是
 * 选择与这些公约最少重叠，而仍然
 * 为将来的版本和用户定义其他空间
 * 应用。
 *
 * 用于确定退出状态代码的三个主要惯例
 * 如下面所述：
 *
 * 标准C/C++库（stdlibc）：
 *      http://www.gnu.org/software/libc/manual/html_node/Exit-status.html
 *      （这个链接还包含其他GNU特定的约定）
 *    BSD sysexits.h：
 *      http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 *    Bash脚本：
 *      http://tldp.org/LDP/abs/html/exitcodes.html
 * 备注常量：
 *          先用defined判断常量是否存在，
 *          如果常量存在则不进行||赋值，
 *          反之进行赋值。
 */

defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS',        0); // no errors                                        没有错误
defined('EXIT_ERROR')          || define('EXIT_ERROR',          1); // generic error                                    一般错误
defined('EXIT_CONFIG')         || define('EXIT_CONFIG',         3); // configuration error                              配置错误
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE',   4); // file not found                                   文件未找到
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS',  5); // unknown class                                    未知的类
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member                             未知的班级成员
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT',     7); // invalid user input                               无效的用户输入
defined('EXIT_DATABASE')       || define('EXIT_DATABASE',       8); // database error                                   数据库错误
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN',      9); // lowest automatically-assigned error code         最低自动分配的错误代码
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX',    125); // highest automatically-assigned error code        最高自动分配的错误代码
