<?php 

// 如果该行为只作用于本应用，请不要在此配置，只需在本应用目录下新建tags.php即可
// 若返回false 则表示动态注册，系统每次都会执行该文件！
// 若返回数组，则系统会自动缓存，只会执行一次改文件，若要再次缓存，删除缓存即可！

// 参考默认格式 返回数组
return [
    // '标签位置'   =>  '行为1,行为2'
    'app_end'   =>  '\\app\\tongji\\behavior\\Tongji'
];