<?php

Auth::routes();

Route::group(['middleware' => 'guest'], function() {

    Route::get('/', 'HomeController@index')->name('home');

    Route::view('/co-working', "co-working")->name('co-working');
    Route::view('/guest',"guest")->name('guest');

    Route::post('/co-working',"CoWorking\Attendance")->name('co-working.attendance');
    Route::get('/co-working/welcome/{user}',"CoWorking\Welcome")->name('co-working.welcome');
    Route::view('/co-working/coworking-registration-and-login-form',"co-working.coworking-registration-and-login-form")
        ->name('co-working.coworking-registration-and-login-form');

    Route::post('/guest',"Guest\Attendance")->name('guest.attendance');
    Route::get('/guest/{user}/welcome',"Guest\Welcome")->name('guest.welcome');
    Route::view('/guest/registration',"guest.registration")->name('guest.registration');



    Route::group(['prefix'=> "account", "namespace" => "Account"], function (){
        Route::view('/{user}/change-password',"co-working.changepassword")->name('account.password.change');
    });
});


Route::group(["prefix"=>'events'], function(){
    
    Route::get('/',"EventController@index")->name('events.index');
    Route::get('/create', "EventController@create")->name('events.create');
    Route::post('/', "EventController@store")->name('events.store');	
	Route::get('/{event}/detail',"ShowDetail")->name('event.details');
	
});



// should be grouped with the events above
Route::group(['middleware' => 'auth'], function() {
	Route::group(['namespace' => "Event"], function() {
	    Route::get('events/{event}/register', "RegistrationPageController")->name('register');
	    Route::post('events/{event}/participant',"AddParticipantController")->name('events.participant.add');
	    Route::get('events/{event}/seedetails', "SeeDetails")->name('event.seedetails');
	    Route::get('events/{participant}/welcome', "WelcomeController")->name('event.welcome');
	    Route::post('events/{event}/create/addspeaker', "AddSpeakerController")->name('event.speaker');
	    Route::get('events/{event}/create/addspeaker', "AddSpeakerController")->name('speaker');
	});

	Route::group(['prefix' => "dashboard", "namespace" => "Dashboard"], function() {
	    Route::view('/',"dashboard.index")->name('dashboard.index');
	});

	Route::group(['prefix' => "inventory", "namespace" => "Inventory"], function() {
	    Route::post('/',"AddChairController")->name('inventory.chair.add');
	    Route::get('/create',"CreateChairController")->name('inventory.create');
	});



});