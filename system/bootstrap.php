<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2017 British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	CodeIgniter Dev Team
 * @copyright	2014-2017 British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 3.0.0
 * @filesource
 */

/*
 * ---------------------------------------------------------------
 * SETUP OUR PATH CONSTANTS
 * ---------------------------------------------------------------
 *
 * The path constants provide convenient access to the folders
 * throughout the application. We have to setup them up here
 * so they are available in the config files that are loaded.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 设置我们的路径常量
 * --------------------------------------------------------------
 *
 * 路径常量提供了对文件夹的方便访问
 * 整个应用程序。我们必须在这里设置他们
 * 因此它们在加载的配置文件中可用
 *
 * 函数解释：
 *      trim（）
 *          移除字符串两侧的字符（"Hello" 中的 "He" 以及 "World" 中的 "d!"）：
 *              $str = "Hello World!";
 *              echo $str . "<br>";
 *              echo trim($str,"Hed!");
 *          输出结果 “llo worl”；
 *      strrpos（）
 *              查找 "php" 在字符串中最后一次出现的位置：
 *              echo strrpos("You love php, I love php too!","php");
 *          输出结果 “21”
 *
 * 备注变量：$public = 'public';
 *          $aps = 31;
 *
 */

$public = trim($paths->publicDirectory, '/');
$pos = strrpos(FCPATH, $public.DIRECTORY_SEPARATOR);

/**
 * The path to the main application directory. Just above public.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 主应用程序目录的路径。就在公众之上
 *
 * 函数解释：
 *          strlen（）
 *              函数返回字符串 "Shanghai" 的长度：
 *                  echo strlen("Shanghai");
 *                  输出 8；
 *          substr_replace（）
 *                  把 "Hello" 替换成 "world"：；
 *                  echo substr_replace("Hello","world",0);
 *                  输出 world；
 *
 * 备注常量：FCPATH = /home/vagrant/Code/CodeIgniter/public/
 *          ROOTPATH = /home/vagrant/Code/CodeIgniter/
 *          DIRECTORY_SEPARATOR = /
 *
 *
 */

define('ROOTPATH', substr_replace(FCPATH, '', $pos, strlen($public.DIRECTORY_SEPARATOR)));

/**
 * The path to the application directory.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 应用程序目录的目录
 *
 * 函数：
 *      realpath（）
 *          realpath() 函数返回绝对路径。
 *          该函数删除所有符号连接（比如 '/./', '/../' 以及多余的 '/'），返回绝对路径名。
 *          若失败，则返回 false。比如说文件不存在的话。
 *          echo realpath("test.txt");
 *          输出：C:\Inetpub\testweb\test.txt
 *
 * 备注常量：
 *      APPPATH = /home/vagrant/Code/CodeIgniter/application/
 */

define('APPPATH', realpath($paths->applicationDirectory).DIRECTORY_SEPARATOR);

/**
 * The path to the system directory.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 系统目录的路径
 *
 *  备注常量：
 *          BASEPATH = /home/vagrant/Code/CodeIgniter/system/
 *
 */

define('BASEPATH', realpath($paths->systemDirectory).DIRECTORY_SEPARATOR);

/**
 * The path to the writable directory.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 可写目录的路径
 *
 * 备注常量：
 *          WRITEPATH = /home/vagrant/Code/CodeIgniter/writable/
 */

define('WRITEPATH', realpath($paths->writableDirectory).DIRECTORY_SEPARATOR);

/**
 * The path to the tests directory
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 测试目录的路径
 *
 * 备注常量：
 *          TESTPATH = /home/vagrant/Code/CodeIgniter/tests/
 */

define('TESTPATH', realpath($paths->testsDirectory).DIRECTORY_SEPARATOR);

/*
 * ---------------------------------------------------------------
 * GRAB OUR CONSTANTS & COMMON
 * ---------------------------------------------------------------
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 抓住我们的常量和共同点
 *
 * 备注常量：APPPATH = /home/vagrant/Code/CodeIgniter/application/
 *          BASEPATH = /home/vagrant/Code/CodeIgniter/system/
 */
require APPPATH.'Config/Constants.php';

require BASEPATH.'Common.php';

/*
 * ---------------------------------------------------------------
 * LOAD OUR AUTOLOADER
 * ---------------------------------------------------------------
 *
 * The autoloader allows all of the pieces to work together
 * in the framework. We have to load it here, though, so
 * that the config files can use the path constants.
 */

require BASEPATH.'Autoloader/Autoloader.php';
require APPPATH .'Config/Autoload.php';
require APPPATH .'Config/Services.php';

// Use Config\Services as CodeIgniter\Services
class_alias('Config\Services', 'CodeIgniter\Services');

$loader = CodeIgniter\Services::autoloader();
$loader->initialize(new Config\Autoload());
$loader->register();    // Register the loader with the SPL autoloader stack.

// Now load Composer's if it's available
if (file_exists(COMPOSER_PATH))
{
	require COMPOSER_PATH;
}

// Always load the URL helper -
// it should be used in 90% of apps.
helper('url');

/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all of the dirty work to get
 * the pieces all working together.
 */

$app = new \CodeIgniter\CodeIgniter(new \Config\App());
$app->initialize();

return $app;
