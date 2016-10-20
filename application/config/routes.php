<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//============ blog Routes
$route['blog/delete/(:any)'] = 'blog/delete/$1';
$route['blog/update/(:any)'] = 'blog/update/$1';
$route['blog/create']        = 'blog/create';
$route['blog/(:any)']        = 'blog/show/$1';
$route['blog']               = 'blog';


//============ default routes form codeigniter
$route['default_controller'] = 'blog';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
