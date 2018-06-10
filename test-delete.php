<?php

include_once('inc/setup.php');

$area = 'test';

$columns[0]['content'] = 'Title';
$columns[0]['class'] = 'title_c';
$columns[0]['data']['data'] = 'title_secret';
$columns[0]['data']['content'] = 'This is a secret';
$columns[1]['content'] = 'Role';
$columns[1]['class'] = 'role_c';
$columns[1]['data']['data'] = 'role_secret';
$columns[1]['data']['content'] = 'This is another secret';
$columns[2]['content'] = 'Date';
$columns[2]['class'] = 'date_c';
$columns[2]['data']['data'] = 'date_secret';
$columns[2]['data']['content'] = 'This is the final secret';

$data[0][0]['content'] = 'Prueba';
$data[0][0]['class'] = 'title_c_';
$data[0][1]['content'] = 'Testing';
$data[0][1]['class'] = 'role_c_';
$data[0][2]['content'] = 'Today';
$data[0][2]['class'] = 'date_c_';

build_table('test-table',$area,$columns,$data,'active','test-view','test-icon');

?>