<?php 

// 若返回false 则表示动态注册，系统每次都会执行该文件！
// 若返回数组，则系统会自动缓存，只会执行一次改文件，若要再次缓存，删除缓存即可！

// 返回数组
// 格式：Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');
// return [
//     // ['路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）']
//     ['bulletin','bulletin/index/index','GET|POST',[],[]],
// ];