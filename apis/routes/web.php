<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/key', function() {
//     return \Illuminate\Support\Str::random(32);
// });

$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->post('login', "AdminController@login");
    $router->post('changePassword', "AdminController@changePassword");
});

$router->group(['prefix' => 'slider'], function () use ($router) {
    $router->get('getData', "SliderController@getData");
    $router->post('saveData', "SliderController@saveData");
    $router->get('deleteData/{id}', "SliderController@deleteData");
});

$router->group(['prefix' => 'markets'], function () use ($router) {
    $router->get('getData', "MarketsController@getData");
    $router->post('saveData', "MarketsController@saveData");
    $router->get('deleteData/{id}', "MarketsController@deleteData");
});

$router->group(['prefix' => 'banner-image'], function () use ($router) {
    $router->get('getData', "BannerImageController@getData");
    $router->post('saveData', "BannerImageController@saveData");
    $router->get('deleteData/{id}', "BannerImageController@deleteData");
});

$router->group(['prefix' => 'category'], function () use ($router) {
    $router->get('getData', "CategoryController@getData");
    $router->post('saveData', "CategoryController@saveData");
    $router->get('deleteData/{id}', "CategoryController@deleteData");
});

$router->group(['prefix' => 'course-menu'], function () use ($router) {
    $router->get('getData', "CourseMenuController@getData");
    $router->post('saveData', "CourseMenuController@saveData");
    $router->get('deleteData/{id}', "CourseMenuController@deleteData");
});

$router->group(['prefix' => 'course-category'], function () use ($router) {
    $router->get('getData', "CourseCategoryController@getData");
    $router->post('saveData', "CourseCategoryController@saveData");
    $router->get('deleteData/{id}', "CourseCategoryController@deleteData");
});

$router->group(['prefix' => 'courses'], function () use ($router) {
    $router->get('getData', "CourseController@getData");
    $router->get('getSingleDataAdmin', "CourseController@getSingleDataAdmin");
    $router->get('getSingleData', "CourseController@getSingleData");
    $router->post('saveData', "CourseController@saveData");
    $router->get('deleteData/{id}', "CourseController@deleteData");
});

// APIs of Blog
$router->group(['prefix' => 'blog'], function () use ($router) {
    $router->post('saveData','BlogController@saveData');
    $router->get('getData','BlogController@getData');
    $router->get('getSingleData','BlogController@getSingleData');
    $router->get('deleteData/{id}','BlogController@deleteData');
});

$router->group(['prefix' => 'products'], function () use ($router) {
    $router->get('getData', "ProductsController@getData");
    $router->get('getSingleDataAdmin', "ProductsController@getSingleDataAdmin");
    $router->get('getSingleData', "ProductsController@getSingleData");
    $router->post('saveData', "ProductsController@saveData");
    $router->get('deleteData/{id}', "ProductsController@deleteData");
    $router->post('searchSpecialities', "ProductsController@searchSpecialities");
    $router->get('getFilterHint',"ProductsController@getFilterHint");
    $router->get('getFilterData',"ProductsController@getFilterData");
});

$router->group(['prefix' => 'medical-specialities'], function () use ($router) {
    $router->get('getData', "MedicalSpecialitiesController@getData");
    $router->post('saveData', "MedicalSpecialitiesController@saveData");
    $router->post('searchSpecialities', "MedicalSpecialitiesController@searchSpecialities");
    $router->get('deleteData/{id}', "MedicalSpecialitiesController@deleteData");
    $router->get('getKeyword/{pageName}', "MedicalSpecialitiesController@getKeyword");
});
// APIs of CBS Gallery Category
$router->group(['prefix' => 'gallery-category'], function () use ($router) {
    $router->post('saveData','GalleryCategoryController@saveData');
    $router->get('getData','GalleryCategoryController@getData');
    $router->get('deleteData/{id}','GalleryCategoryController@deleteData');
});

// APIs of Gallery
$router->group(['prefix' => 'gallery'], function () use ($router) {
    $router->post('saveData','galleryController@saveData');
    $router->get('getData','galleryController@getData');
    $router->get('getSingleData','galleryController@getSingleData');
    $router->get('deleteData/{id}','galleryController@deleteData');
});


$router->post('sendEmail', "EnquiryController@sendEmail");