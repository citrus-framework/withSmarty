<?php
/**
 * @copyright   Copyright 2020, Citrus All Rights Reserved.
 * @author      take64 <take64@citrus.tk>
 * @license     http://www.besidesplus.net/
 */

$dir_base = dirname(__FILE__) . '/Sample';

return [
    'default' => [
        'application' => [
            'id'        => 'Test\Sample',
            'path'      => $dir_base,
        ],
        'paths' => [
            'cache'             => $dir_base . '/Cache/{#domain#}',
            'compile'           => $dir_base . '/Compile/{#domain#}',
            'template'          => $dir_base . '/Template/{#domain#}',
            'smarty_plugin'     => $dir_base . '/Template/{#domain#}/Plug',
            'javascript'        => $dir_base . '/Javascript/{#domain#}',
            'javascript_library'=> $dir_base . '/Javascript/Library',
            'stylesheet'        => $dir_base . '/Stylesheet/{#domain#}',
            'stylesheet_library'=> $dir_base . '/Stylesheet/Library',
        ],
        'formmap' => [
            'path' => $dir_base . '/Business/Formmap',
            'cache' => false,
        ],
    ],
    'example.com' => [
        'application' => [
            'name'      => 'CitrusFramework Console.',
            'copyright' => 'Copyright 2019 CitrusFramework System, All Rights Reserved.',
            'domain'    => 'hoge.example.com',
        ],
        'logger' => [
            'directory' => $dir_base . '/log',
            'filename'  => '/hoge.example.com.system_log',
            'level'     => 'debug',
            'display'   => false,
            'owner'     => posix_getpwuid(posix_geteuid())['name'],
            'group'     => posix_getgrgid(posix_getegid())['name'],
            'mode'      => 0666,
        ],
        'routing' => [
            'default'   => 'home/login',
            'login'     => 'home/login',
            'error404'  => 'page/error404',
            'error503'  => 'page/error503',
        ],
    ],
];
