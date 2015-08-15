<?php
/**
 * 调试函数
 * @param $value
 */
function f($value)
{
    if (env('APP_DEBUG')) {
        echo '<pre style="font-size: 12px;">', var_export($value, true), '</pre>';
    }
}


/**
 * 控制nav的激活状态
 * @param $route
 * @return bool
 */
function nav_active($route)
{
    static $routeInstance = null;//避免多次实例化
    if (!isset($routeInstance)) {
        $routeInstance = \Illuminate\Support\Facades\App::make('router');
    }

    if ($routeInstance->currentRouteName() === $route) {
        return true;
    }

    return false;
}

function read_file($path)
{
    if (!file_exists($path)) {
        die('file_not_exists');
    }

    $file_ext = pathinfo($path, PATHINFO_EXTENSION);
    $file_size = filesize($path);
    $file_name = md5(time() . rand(1000, 9999)) . '.' . $file_ext;

    header("Content-type: application/force-download");
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: filename=$file_name");
    header("Content-Length: " . $file_size);

    readfile($path);
    exit;
}

/**
 * 递归创建目录
 * @example create_dir(dirname('/a/b/c/d/file.ext'))
 * @param $path
 * @param int $permission
 */
function create_dir($path, $permission = 0755)
{
    if (!file_exists($path)) {
        create_dir(dirname($path), $permission);
        mkdir($path, $permission);
    }
}
