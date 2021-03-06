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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/** routes for the admin session starts here */


$route["admin"]= "admin_controller/index";

$route['admin/add_product']= "admin_controller/addproduct";

$route["admin/add_product_form_submit"] ="admin_controller/add_product_form_submit";

$route["admin/view_product/(:num)"]="admin_controller/view_product/$1";

$route['admin/view_product/change_product_image/(:num)']="admin_controller/change_product_image/$1";

$route['admin/view_product/change_product_details/(:num)']="admin_controller/change_product_details/$1";


$route['dashboard']="admin_controller/dashboard";

$route['dashboard/login']="admin_controller/dashboard_login";


$route['admin/logout']="admin_controller/dashboard_logout";

$route['admin/notifications/(:num)']="admin_controller/notification_view/$1";

$route['admin/notifications/delete_request/(:num)']="admin_controller/delete_request/$1";

$route['search/products']="admin_controller/search_products";

$route['search/search_results/(:num)']="admin_controller/search_results/$1";









/** Routes for the admin session ends here */


/**Route for the front view start here */
$route['default_controller'] = 'frontview_controller';




/**Routes for the frontview ends here */


/**This  is the routes for the single complete shop */

$route['completeshop/(:num)'] = 'complete_shop/home/$1';

$route['completeshop/complete_shop/agree'] = 'complete_shop/agree';

$route['completeshop/complete_shop/personal_detail'] = 'complete_shop/personal_detail';



/**end of routes for the single complete shop */
