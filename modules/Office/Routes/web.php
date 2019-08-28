<?php
Route::group(['middleware'=> 'guest'], function(){
    Route::view('login', "office::login")->name('office.login');
    Route::post('login', "LoginController")->name('office.login.submit');
});

Route::group(['middleware'=> 'auth'], function(){
    Route::post('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('office.logout');
    Route::get('users', 'User\UserListingController')->name('users.listing');

    Route::group(['prefix'=>'employees'], function(){
        Route::group(['namespace'=>"Employee"], function(){
            Route::view('/create', 'office::employee.create')->name('employee.create');   
            Route::post('/', 'CreateEmployeeController')->name('employee.store');
            Route::get('/', 'EmployeeListingController')->name('employee.listing');      
        });
    });

    Route::group(['prefix'=>'interns'], function(){
        Route::group(['namespace'=>"Intern"], function(){
            Route::get('/', 'InternListingController')->name('intern.listing');
            Route::view('/create', 'office::intern.create')->name('intern.create');
            Route::post('/', 'CreateInternController')->name('intern.store');
        
        });
    });
    
    Route::group(['prefix'=>'coworking'], function(){
        Route::group(['namespace'=>'CoWorking'], function(){
            Route::get('/', 'CoWorkingListingController')->name('coworking.listing');
            Route::view('/create', 'office::coworking.create')->name('coworking.create');
            Route::post('/', 'CreateCoWorkingController')->name('coworking.store');
        });
    });

    Route::group(['prefix'=>'attendance'], function(){
        Route::group(['namespace'=> 'Attendance'],function(){
            Route::get('/', 'AttendanceListingController')->name('attendance.listing');
        });
    });
    
    Route::group(['prefix'=>'events'], function(){
        Route::group(['namespace'=>'Event'], function(){
            Route::get('/', 'EventListingController@index')->name('adminevent.index');
            Route::get('/create', 'EventListingController@create')->name('adminevent.create');
            Route::post('/', 'EventListingController@store')->name('adminevent.store');
            Route::get('/{event}/detail', 'EventDetailController')->name('adminevent.detail');
            Route::get('/{event}/detail/edit', 'EventListingController@edit')->name('adminevent.edit');
            Route::patch('/{event}/detail','EventListingController@update')->name('adminevent.update');
            Route::delete('/{event}', 'EventListingController@destroy')->name('adminevent.delete');
            Route::post('/{event}/create/speaker', 'CreateSpeakerController')->name('adminevent.speaker.add');
            Route::get('{event}/speaker', 'AddEventSpeakerController')->name('adminevent.speaker');
        });
    });
});
