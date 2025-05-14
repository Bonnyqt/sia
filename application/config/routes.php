<?php


defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Blog routes
$route['blog'] = 'blog/index';
$route['blog'] = 'blog/index';
$route['blog/about'] = 'blog/about';
$route['blog/myposts'] = 'blog/myposts';
$route['blog/save'] = 'blog/save';
$route['blog/list'] = 'blog/list';
$route['blog/api'] = 'blog/api';
$route['blog/search'] = 'blog/search';
$route['blog/update/(:num)'] = 'blog/update/$1';
$route['blog/delete/(:num)'] = 'blog/delete/$1';
$route['blog/getPost/(:num)'] = 'Blog/getPost/$1';
$route['blog/like/(:num)'] = 'blog/like/$1';
$route['blog/comment/(:num)'] = 'blog/comment/$1';


$route['signup'] = 'auth/signup';
$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['auth/markFirstLoginDone'] = 'auth/markFirstLoginDone';
$route['auth/verifyPassword'] = 'Auth/verifyPassword';

$route['api/get-data'] = 'apicontroller/getData';
$route['api/store-data'] = 'apicontroller/storeData';

$route['admin'] = 'admin/admin_dashboard';
$route['admin'] = 'admin/admin_logs';
$route['admin'] = 'admin/admin_users';
$route['admin'] = 'admin/admin_blogs';
