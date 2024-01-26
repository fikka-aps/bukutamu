<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'auth/bukutamu';
$route['dashboard'] = 'user/dashboard';
$route['user'] = 'user/user';
$route['editUser'] = 'user/editUser';
$route['deleteUser/(:any)'] = 'user/deleteUser/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
