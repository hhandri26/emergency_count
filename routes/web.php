<?php
Route::get('/', function () {
    return view('login/form_login');
});
Route::get('/forgot', function () {
    return view('login/forgot_password');
});
Auth::routes();

Route::group(['middleware'=>'admin'], function(){
	// home
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/delete', 'ConfigController@delete')->name('delete');

    // area
    Route::get('/area', 'AreaController@index')->name('area');
    Route::get('/area_form', 'AreaController@form')->name('area_form');
    Route::post('/area_add', 'AreaController@add')->name('area_add');
    Route::get('/area_edit', 'AreaController@edit')->name('area_edit');
    

    // departement
    Route::get('/department', 'DepartmentController@index')->name('department');
    Route::get('/department_form', 'DepartmentController@form')->name('department_form');
    Route::post('/department_add', 'DepartmentController@add')->name('department_add');
    Route::get('/department_edit', 'DepartmentController@edit')->name('department_edit');

    // device
    Route::get('/device', 'DeviceController@index')->name('device');
    Route::get('/device_form', 'DeviceController@form')->name('device_form');
    Route::post('/device_add', 'DeviceController@add')->name('device_add');
    Route::get('/device_edit', 'DeviceController@edit')->name('device_edit');

    // employee
    Route::get('/employee', 'EmployeeController@index')->name('employee');
    Route::get('/employee_form', 'EmployeeController@form')->name('employee_form');
    Route::post('/employee_add', 'EmployeeController@add')->name('employee_add');
    Route::get('/employee_edit', 'EmployeeController@edit')->name('employee_edit');

    // visitor
    Route::get('/visitor', 'VisitorController@index')->name('visitor');
    Route::get('/visitor_form', 'VisitorController@form')->name('visitor_form');
    Route::post('/visitor_add', 'VisitorController@add')->name('visitor_add');
    Route::get('/visitor_edit', 'VisitorController@edit')->name('visitor_edit');

    // contractor
    Route::get('/contractor', 'ContractorController@index')->name('contractor');
    Route::get('/contractor_form', 'ContractorController@form')->name('contractor_form');
    Route::post('/contractor_add', 'ContractorController@add')->name('contractor_add');
    Route::get('/contractor_edit', 'ContractorController@edit')->name('contractor_edit');

    // Monitoring
    Route::get('/monitoring', 'MonitoringController@index')->name('monitoring');



});

