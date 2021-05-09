<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
///////////////////////////
/////    DashBoard   //////
///////////////////////////
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/sign_in'] = 'admin/signin';

///////////////////////////
///////    Posts     //////
///////////////////////////
$route['admin/post'] = 'admin/posts';
$route['admin/add-post'] = 'admin/add_post';
$route['admin/save-post'] = 'admin/save_post';
$route['admin/list-post'] = 'admin/list_post';
$route['admin/delete_post/(:num)'] = 'admin/delete_post/$1';
$route['admin/edit_post/(:num)'] = 'admin/edit_post/$1';

///////////////////////////
///////   Categorie  //////
///////////////////////////
$route['admin/categorie'] = 'admin/categorrie';
$route['admin/save-categorie'] = 'admin/save_categorie';


///////////////////////////
///////    Books    ///////
///////////////////////////
$route['admin/book'] = 'admin/books';
$route['admin/add-book'] = 'admin/add_book';
$route['admin/save-book'] = 'admin/save_book';
$route['admin/list-book'] = 'admin/list_book';
$route['admin/delete_book/(:num)'] = 'admin/delete_book/$1';
$route['admin/edit_book/(:num)'] = 'admin/edit_book/$1';


///////////////////////////
///////    Books    ///////
///////////////////////////
$route['admin/comment'] = 'admin/view_comment';
$route['admin/delete_comment/(:num)'] = 'admin/delete_comment/$1';
$route['admin/approve_comment/(:num)'] = 'admin/approve_comment/$1';
$route['admin/unapprove_comment/(:num)'] = 'admin/unapprove_comment/$1';



///////////////////////////
///////    Maps     //////
///////////////////////////
$route['admin/map'] = 'admin/maps';
$route['admin/add-map'] = 'admin/add_map';
$route['admin/save-map'] = 'admin/save_map';
$route['admin/list-map'] = 'admin/list_map';
$route['admin/delete_map/(:num)'] = 'admin/delete_map/$1';
$route['admin/edit_map/(:num)'] = 'admin/edit_map/$1';


///////////////////////////
//////    Setting    //////
///////////////////////////
$route['admin/setting'] = 'admin/setting';
$route['admin/setting-save/(:num)'] = 'admin/setting_update/$1';
$route['admin/setting-changePassword/(:num)'] = 'admin/setting_changePassword/$1';
$route['admin/setting-socialLinks/(:num)'] = 'admin/setting_socialLinks/$1';



//////////////////////////////////////////////////////////////////////
/////////////////////////    Front End    ////////////////////////////
//////////////////////////////////////////////////////////////////////


///////////////////////////
//////    Categorie  //////
///////////////////////////
// $route['categorie/(.*)/(:num)'] ='main/view_categorie/$1/$2/$3/$4';
$route['book/categorie/(.*)'] ='main/view_book_categorie/$1/$2/$3';

$route['categorie/(.*)'] ='main/view_categorie/$1/$2/$3/$4';
$route['maps'] = 'main/view_all_map';

///////////////////////////
//////    Posts    ////////
///////////////////////////

$route['posts/(:any)'] ='main/view_posts/$1';
$route['post/post_comment/(:num)'] =  'main/post_comment/$1';
$route['post/search'] = 'main/search_post';


///////////////////////////
//////    Books    ////////
///////////////////////////
$route['book/search'] = 'main/search_book';

$route['book/(:any)'] ='main/view_book/$1';
$route['book/book_comment/(:num)'] =  'main/book_comment/$1';

///////////////////////////
//////    Maps    ////////
///////////////////////////
$route['maps/search'] = 'main/search_map';

$route['maps/(:any)'] ='main/view_map/$1';
$route['map/map_comment/(:num)'] =  'main/post_comment/$1';

///////////////////////////
//////    blog    ////////
///////////////////////////

$route['blog'] ='main/view_blog';

///////////////////////////
//////    Contact  Us    ////////
///////////////////////////

$route['contact'] ='main/cantact_us';



