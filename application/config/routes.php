<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['import'] = 'import/db_import';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['assets/(:any)'] = 'assets/$1';

