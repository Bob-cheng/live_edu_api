<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
        'id' => '\d+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['hello_world/hello', ['method' => 'post']],
    ],
    'hello/[:name]' => 'hello_world/hello',  //默认模块就是index，可以不用另外说明模块，只用说明控制器
    //'index' => 'index/index/index'
    //'user/add' => 'index/user/add',
    //'update/:id' => 'index/user/update',  //右边指向的都是函数
    //'user/:id' => 'index/user/read',
];
