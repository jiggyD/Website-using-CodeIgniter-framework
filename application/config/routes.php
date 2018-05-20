<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'yogacontroller';
$route['about']='yogacontroller/about';
$route['classes']='yogacontroller/classes';
$route['contact']='yogacontroller/contact';
$route['register']='yogacontroller/register';
$route['schedule']='yogacontroller/schedule';
$route['try']='yogacontroller/try';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
