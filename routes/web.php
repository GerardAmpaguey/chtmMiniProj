<?php


Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/login', 'LoginController@store');

Route::middleware('auth')
	->group(function() {
		Route::get('/logout', 'LoginController@logout');

		Route::get('/equipment', 'EquipmentController@index');
		Route::get('/equipment/create', 'EquipmentController@create');
		Route::post('/equipment/store', 'EquipmentController@store');
        Route::get('/utensils', 'UtensilsController@index');
        Route::get('/utensils/create', 'UtensilsController@create');
        Route::post('/utensils/store', 'UtensilsController@store');
        Route::get('/utensils/{utensil}/edit', 'UtensilsController@edit');
        Route::post('/utensils/{utensil}/update', 'UtensilsController@update');
        // route model binding 
        Route::get('/equipment/{equipment}/edit', 'EquipmentController@edit');
        Route::post('/equipment/{equipment}/update', 'EquipmentController@update');
        Route::get('/borrowers' , 'BorrowersController@index');
        Route::get('/borrowers/create','BorrowersController@create');
        Route::post('borrowers/store' , 'BorrowersController@store');
        Route::get('equipment/{equipment}/delete' , 'EquipmentController@delete');
         Route::get('utensils/{utensil}/delete' , 'UtensilsController@delete');
         Route::get('/equipment/{equipment}/issue' , 'EquipmentController@issue');


	});
