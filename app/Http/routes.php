<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'admin'], function(){

	Route::get('/admin/courselist', ['as' => 'courselist', function(){ 
               return view('admin/courselist');

	}]);
        Route::get('/admin/course/{idedit}', ['as' => 'adminview', function($idedit){ 
 		return view('admin/adminCourseView', ['idedit' => $idedit]); 
		
 	}]); 





	Route::get('/admin/tee/{idedit}', ['as' => 'adminTeeView', function($idedit){ 
 		return view('admin/adminTeeView', ['idedit' => $idedit]); 

 	}]); 
        Route::get('/admin/newTee{idedit}', ['as' => 'adminnewTee', function($idedit){
           
		  return view('admin/adminNewTeeView', ['idedit' => $idedit]);
		
	 }]);
	Route::post('/admin/newTee', ['as' => 'adminnewTeeColorView', 'uses'=>'AdminController@newTee']);




	Route::get('/admin/newcourse', ['as' => 'adminnewcourse', function(){ 
               
               return view('admin/adminnewcourse');
 	}]);
       	Route::post('/admin/newcourse', ['as' => 'adminnewcourse', 'uses'=>'AdminController@newCourse']);




//.....................................................................................................
	Route::get('/admin/courseEdit/{idedit}', ['as' => 'adminCourseEdit', function($idedit){
 	               
		return view('admin/adminCourseEdit', ['idedit' => $idedit]);

        }]);
	Route::post('/admin/courseEdit/edit', ['uses'=>'AdminController@editCourse']);

	 Route::get('/admin/courseparedit/{idedit}', ['as' => 'adminCourseParEdit', function($idedit){
	       
                 return view('admin/adminCourseParEdit', ['idedit' => $idedit]);

        }]);
	Route::post('/admin/courseparedit/edit', ['uses'=>'AdminController@editCoursePar']);
//.......................................................................................................



});
