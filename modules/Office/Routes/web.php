<?php

Route::view('login', "office::login")->name('office.login');
Route::post('login', "LoginController")->name('office.login.submit');

Route::group(['middleware'=> 'auth'], function(){
    Route::post('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('office.logout');
    Route::view('employees/create', 'office::employee.create')->name('employee.create');
    Route::post('employees', 'Employee\CreateEmployeeController')->name('employee.store');
    Route::get('employees', 'Employee\EmployeeListingController')->name('employee.listing');

    Route::get('users', 'User\UserListingController')->name('users.listing');

    Route::get('interns', 'Intern\InternListingController')->name('intern.listing');
    Route::view('/interns/create', 'office::intern.create')->name('intern.create');
    Route::post('/intern', 'Intern\CreateInternController')->name('intern.store');

    Route::get('coworking', 'CoWorking\CoWorkingListingController')->name('coworking.listing');
    Route::view('/coworking/create', 'office::coworking.create')->name('coworking.create');
    Route::post('coworking', 'CoWorking\CreateCoWorkingController')->name('coworking.store');
});
