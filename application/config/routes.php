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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['about'] = 'home/about';
$route['contact'] = 'home/contact_us';
$route['case-studies'] = 'home/case_study';
$route['case-study-details'] = 'home/case_study_details';
$route['blogs'] = 'home/blogs';
$route['blog-details'] = 'home/blog_details';
$route['saas-development'] = 'home/saas_development';
$route['mobile-app-development'] = 'home/mobile_app_development';
$route['maintenance-and-support'] = 'home/maintenance_and_support';
$route['hire-dedicated-resources'] = 'home/hire_dedicated_resources';
$route['testimonials'] = 'home/testimonials';
$route['javascript-framework'] = 'home/javascript_framework';
$route['python-framework'] = 'home/python_framework';
$route['php-framework'] = 'home/php_framework';
$route['mobile-application-framework'] = 'home/mobile_application_framework';


$route['blockchain-development'] = 'home/blockchain_development';
$route['artificial-intelligence'] = 'home/artificial_intelligence';
$route['IOT'] = 'home/iot_development';

$route['our-team'] = 'home/our_team';
$route['careers'] = 'home/careers';
$route['privacy-policy'] = 'home/privacy_policy';
$route['refund-policy'] = 'home/refund_policy';
$route['portfolio'] = 'home/portfolio';
$route['outsource-projects'] = 'home/outsource_projects';
$route['white-label-partnership'] = 'home/white_label_partnership';
$route['product-partnership'] = 'home/product_partnership';


// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


////////////////////////////////////////////////////////
$route['contact_user'] = 'home/contactUser';
$route['submit-contactus'] = 'home/save_contactus';
$route['submit-getintouch'] = 'home/getintouch';
$route['submit-careers'] = 'home/save_careers';
$route['submit-enquiry'] = 'home/save_enquiry';
$route['new-submit-enquiry'] = 'home/new_save_enquiry';

$route['thank-you'] = 'home/thankyou';
$route['contacted'] = 'home/thankyou';

////////////////////////////////////////////////////////

// user blog
$route['blogs'] = 'blog';
$route['blog/(:any)'] = 'blog/singleBlog/$1';
$route['add-blog-comment'] = 'blog/addBlogComment';
$route['toggle-like'] = 'blog/toggleLike';

// login
$route['login'] = 'login/index';
$route['login/authenticate'] = 'login/authenticate';
$route['logout'] = 'login/logout';
// $route['register'] = 'register/index';
// $route['register/store'] = 'register/store';

// Admin page
$route['dashboard'] = 'dashboard/index'; 

// Admin enquires
$route['admin-enquires'] = 'enquire/adminEnquires';
$route['admin-enquires/(:num)'] = 'enquire/adminEnquires/$1';

// Admin blog
$route['admin-blogs'] = 'blog/adminBlog';
$route['create-blog'] = 'blog/createBlog';
$route['submit-blog'] = 'blog/submitBlog';
$route['delete-blog/(:num)'] = 'blog/deleteBlog/$1';
$route['edit-blog/(:any)'] = 'blog/editBlog/$1';
$route['update-blog'] = 'blog/updateBlog';
$route['update-all-blog'] = 'blog/updateAllBlogsInSitemap';

// sponsors
$route['admin-sponsor'] = 'sponsor/index';
$route['get-sponsors'] = 'sponsor/getSponsors';
$route['add-sponsor'] = 'sponsor/addSponsor';
$route['update-sponsor'] = 'sponsor/updateSponsor';
$route['delete-sponsor/(:num)'] = 'sponsor/deleteSponsor/$1';
$route['get-sponsor/(:num)'] = 'sponsor/getSponsor/$1';

// color theme
$route['color/admin-color-theme'] = 'theme/index';
$route['color/save'] = 'theme/save';
$route['color/get-color-codes'] = 'theme/getColorCodes';

// Dynamic css
$route['styles/dynamic.css'] = 'theme/dynamicCss';

// Menu 
$route['menu'] = 'menu/index'; 
$route['menu/add'] = 'menu/add'; 
$route['menu/fetch'] = 'menu/fetch'; 
$route['menu/delete/(:num)'] = 'menu/delete/$1'; 
$route['menu/get/(:num)'] = 'menu/get/$1';
$route['menu/update/(:num)'] = 'menu/update/$1'; 