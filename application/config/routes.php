<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['verify']			       = 'main/verify_user';
$route['logout']			       = 'user/unset_data';
$route['students']			       = 'pages/student_list';
$route['add_employee']		       = 'employee/add_employee';
$route['employee_list']            = 'employee/employee_list';
$route['insert_user']              = 'user/insert_user';
$route['delete/(:num)']            = 'user/delete/$1';
$route['patient']                  = 'patients/load_patient';
$route['patient_list']             = 'patients/patient_list';
$route['insert_patient']           = 'patients/insert_patient';
$route['consultation']             = 'consult/view_consult';
$route['inventory']                = 'medicine/load_inventory';
$route['save_med']                 = 'medicine/save_med';
$route['view_records/(:num)']      = 'consult/view_records/$1';
$route['insert_consultation']      = 'consult/insert_consultation';
$route['save_findings']            = 'consult/save_findings';
$route['prescription/(:num)']      = 'consult/prescription/$1';
$route['save_prescribe']           = 'medicine/save_prescribe';
$route['delete_pre/(:num)/(:num)'] = 'medicine/delete_pre/$1/$2';
$route['add_stock']                = 'medicine/add_stock';
$route['equipment']                = 'medicine/load_equipment';
$route['save_eq']                  = 'medicine/save_eq';
$route['consultation_done/(:num)'] = 'consult/consultation_done/$1';
$route['print/(:num)']             = 'consult/prints/$1';
$route['payrolls']                  = 'payroll/payrolls';