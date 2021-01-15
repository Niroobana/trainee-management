<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth','namespace'=>'Admin'], function () {
   Route::get('/admindashboard', 'DashboardController@index')->name('admindashboard');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('admin.user.index');
    Route::get('/create', 'UserController@create')->name('admin.user.create');
    Route::post('/', 'UserController@store')->name('admin.user.store');

    Route::group(['prefix' => '{user}'], function () {
        Route::get('/', 'UserController@show')->name('admin.user.show');
        Route::get('/edit', 'UserController@edit')->name('admin.user.edit');
        Route::patch('/', 'UserController@update')->name('admin.user.update');
        Route::get('/delete', 'UserController@delete')->name('admin.user.delete');
        Route::delete('/', 'UserController@destory')->name('admin.user.destroy');
    });

});



/*Route::resource('training_programs','TrainingProgramController'
);
Route::resource('trainee','traineeController'
);
Route::resource('resource','resourceController'
);
Route::resource('admin','adminController'
);

Route::resource('coordinator','coordinatorController'
);
Route::resource('gallery','galleryController'
);




//Route::get('/pages/samples/register', function () {
   // return view('register');
//});
//Route::get('/pages/samples/login', function () {
 //return view('login');
//});
//Route::get('/pages/samples/error-404', function () {
//    return view('error-404');
//});
//Route::get('/pages/samples/error-500', function () {
//    return view('error-500');
//}); */
Route::get('/site', function () {
    return view('web.site');
});
Route::get('/about', function () {
    return view('web.about');
});
Route::get('/course', function () {
    return view('web.course');
});
Route::get('/select', function () {
    return view('web.select');
});
Route::get('/events', function () {
    return view('web.events');
});
Route::get('/photos', function () {
    return view('web.photos');
});
Route::get('/contact', function () {
    return view('web.contact');
});
Route::group(['prefix' => 'courses'], function () {
    Route::get('/', 'CourseController@index')->name('admin.courses.index');
    Route::get('/create', 'CourseController@create')->name('admin.courses.create');
    Route::post('/', 'CourseController@store')->name('admin.courses.store');

    Route::group(['prefix' =>'{courses}'], function () {
        Route::get('/', 'CourseController@show')->name('admin.courses.show');
        Route::get('/edit', 'CourseController@edit')->name('admin.courses.edit');
        Route::patch('/', 'CourseController@update')->name('admin.courses.update');
        Route::get('/delete', 'CourseController@delete')->name('admin.courses.delete');
        Route::delete('/', 'CourseController@destory')->name('admin.courses.destroy');
    });

});
Route::group(['prefix' => 'training_programs'], function () {
   Route::get('/', 'TrainingProgramController@index')->name('admin.training_programs.index');
    Route::get('/create', 'TrainingProgramController@create')->name('admin.training_programs.create');
    Route::post('/', 'TrainingProgramController@store')->name('admin.training_programs.store');

 Route::group(['prefix' =>'{training_programs}'], function () {
     Route::get('/', 'TrainingProgramController@show')->name('admin.training_programs.show');
     Route::get('/edit', 'TrainingProgramController@edit')->name('admin.training_programs.edit');
     Route::patch('/', 'TrainingProgramController@update')->name('admin.training_programs.update');
    Route::get('/delete', 'TrainingProgramController@delete')->name('admin.training_programs.delete');
   Route::delete('/', 'TrainingProgramController@destory')->name('admin.training_programs.destroy');
 });
});
Route::group(['prefix' => 'resource'], function () {
    Route::get('/', 'resourceController@index')->name('admin.resource.index');
    Route::get('/create', 'resourceController@create')->name('admin.resource.create');
    Route::post('/', 'resourceController@store')->name('admin.resource.store');

    Route::group(['prefix' =>'{resource}'], function () {
        Route::get('/', 'resourceController@show')->name('admin.resource.show');
        Route::get('/edit', 'resourceController@edit')->name('admin.resource.edit');
        Route::patch('/', 'resourceController@update')->name('admin.resource.update');
        Route::get('/delete', 'resourceController@delete')->name('admin.resource.delete');
        Route::delete('/', 'resourceController@destory')->name('admin.resource.destroy');
    });

});
Route::group(['prefix' => 'coordinator'], function () {
    Route::get('/', 'coordinatorController@index')->name('admin.coordinator.index');
    Route::get('/create', 'coordinatorController@create')->name('admin.coordinator.create');
    Route::post('/', 'coordinatorController@store')->name('admin.coordinator.store');

    Route::group(['prefix' =>'{coordinator}'], function () {
        Route::get('/', 'coordinatorController@show')->name('admin.coordinator.show');
        Route::get('/edit', 'coordinatorController@edit')->name('admin.coordinator.edit');
        Route::patch('/', 'coordinatorController@update')->name('admin.coordinator.update');
        Route::get('/delete', 'coordinatorController@delete')->name('admin.coordinator.delete');
        Route::delete('/', 'coordinatorController@destory')->name('admin.coordinator.destroy');
    });

});
Route::group(['prefix' => 'trainee'], function () {
    Route::get('/', 'traineeController@index')->name('admin.trainee.index');
    Route::get('/create', 'traineeController@create')->name('admin.trainee.create');
    Route::post('/', 'traineeController@store')->name('admin.trainee.store');

    Route::group(['prefix' =>'{trainee}'], function () {
        Route::get('/', 'traineeController@show')->name('admin.trainee.show');
        Route::get('/edit', 'traineeController@edit')->name('admin.trainee.edit');
        Route::patch('/', 'traineeController@update')->name('admin.trainee.update');
        Route::get('/delete', 'traineeController@delete')->name('admin.trainee.delete');
        Route::delete('/', 'traineeController@destory')->name('admin.trainee.destroy');
    });

});
Route::group(['prefix' => 'target_group'], function () {
    Route::get('/', 'TargetGroupController@index')->name('admin.target_group.index');
    Route::get('/create', 'TargetGroupController@create')->name('admin.target_group.create');
    Route::post('/', 'TargetGroupController@store')->name('admin.target_group.store');

    Route::group(['prefix' =>'{target_group}'], function () {
        Route::get('/', 'TargetGroupController@show')->name('admin.target_group.show');
        Route::get('/edit', 'TargetGroupController@edit')->name('admin.target_group.edit');
        Route::patch('/', 'TargetGroupController@update')->name('admin.target_group.update');
        Route::get('/delete', 'TargetGroupController@delete')->name('admin.target_group.delete');
        Route::delete('/', 'TargetGroupController@destory')->name('admin.target_group.destroy');
    });

});
