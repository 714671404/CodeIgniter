<?php

// Location to the Paths config file.
// This should be the only line you need to
// edit in this file.

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 位置到路径配置文件。
 * 这应该是你唯一需要的行
 * 在这个文件中编辑
 *
 */

$pathsPath = '../application/Config/Paths.php';

// Path to the front controller (this file)

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 前段控制器的路径（此文件）
 *
 */
define('FCPATH', __DIR__.DIRECTORY_SEPARATOR);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

/*
 * --------------------------------------------------------------
 * 翻译版：
 * --------------------------------------------------------------
 * 启动应用程序
 * --------------------------------------------------------------
 * 这个过程设置路径常量，加载和寄存器
 * 我们自动加载和Commposer的加载我们的常量
 * 并启动一个特定于环境的引导。
 *
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();

$app = require rtrim($paths->systemDirectory,'/ ').'/bootstrap.php';

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do it's thang.
 */
$app->run();
