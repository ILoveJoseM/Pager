# 简单分页组件

## 示例

````php

$page = 1;//当前页数
$size = 20;//每页行数

$count = 200;//总行数

$pager = new Pager($page, $size);

$meta = $pager->getPager($count);
//$meta = [
//  'total_count'	=>	200,
//  'page_size'	=>	20,
//  'total_page'	=>	10,
//  'first_page'	=>	1,
//  'prev_page'	=>	1,
//  'next_page'	=>	2,
//  'last_page'	=>	20,
//  'current_page'=>	1
//]

````