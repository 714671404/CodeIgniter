<?php namespace Config;

/**
 * Holds the paths that are used by the system to
 * locate the main directories, application, system, etc.
 * Modifying these allows you to re-structure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the application's front controller, index.php
 */

/*
 * 翻译版：
 * 保存系统使用路径
 * 找到主目录，应用程序，系统等
 * 修改这些允许你重新构建你的应用程序，
 * 在多个应用程序之间共享系统文件夹，等等。
 *
 * 所有路径都是相对于应用程序的前段控制器index.php
 */
class Paths
{
	/*
	 *---------------------------------------------------------------
	 * SYSTEM FOLDER NAME
	 *---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "system" folder.
	 * Include the path if the folder is not in the same directory
	 * as this file.
	 */

	/*
	 * ------------------------------------------------------------
	 * 翻译版：
	 *--------------------------------------------------------------
	 * 系统文件夹名称
	 *--------------------------------------------------------------
	 *
	 * 此变量必须包含您的“系统”文件的名称。
	 * 如果文件夹不在相同的目录中，则包含路径
	 * 作为这个文件。
	 */
	public $systemDirectory = '../system';

	/*
	 *---------------------------------------------------------------
	 * APPLICATION FOLDER NAME
	 *---------------------------------------------------------------
	 *
	 * If you want this front controller to use a different "application"
	 * folder than the default one you can set its name here. The folder
	 * can also be renamed or relocated anywhere on your getServer. If
	 * you do, use a full getServer path. For more info please see the user guide:
	 * http://codeigniter.com/user_guide/general/managing_apps.html
	 *
	 * NO TRAILING SLASH!
	 */

	/*
	 *----------------------------------------------------------------
	 * 翻译版：
	 *----------------------------------------------------------------
	 * 应用程序文件夹名称
	 *----------------------------------------------------------------
	 *
	 * 如果你想这个前段控制器使用不同的“应用程序”
	 * 文件夹比默认的你可以在这里设置它的名字。文件夹
	 * 也可以在您的getServer的任何地方从悉尼命名或重新定位。
	 * 您可以使用完成的getServer路径。欲了解更多信息，请参阅读指南：
	 *
	 * 没有跟踪SLASH!
	 */
	public $applicationDirectory = '../application';

	/*
	 * ---------------------------------------------------------------
	 * WRITABLE DIRECTORY NAME
	 * ---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "writable" directory.
	 * The writable directory allows you to group all directories that
	 * need write permission to a single place that can be tucked away
	 * for maximum security, keeping it out of the application and/or
	 * system directories.
	 */
	public $writableDirectory = '../writable';

	/*
	 * ---------------------------------------------------------------
	 * TESTS DIRECTORY NAME
	 * ---------------------------------------------------------------
	 *
	 * This variable must contain the name of your "tests" directory.
	 * The writable directory allows you to group all directories that
	 * need write permission to a single place that can be tucked away
	 * for maximum security, keeping it out of the application and/or
	 * system directories.
	 */
	public $testsDirectory = '../tests';

	/*
	 * ---------------------------------------------------------------
	 * PUBLIC DIRECTORY NAME
	 * ---------------------------------------------------------------
	 *
	 * This variable must contain the name of the directory that
	 * contains the main index.php front-controller. By default,
	 * this is the `public` directory, but some hosts may not
	 * be able to map a primary domain to a sub-directory so you
	 * can change this to `public_html`, for example, to comply
	 * with your host's needs.
	 */
	public $publicDirectory = 'public';
}
