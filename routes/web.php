<?php

// FRONT-END ROUTES
Route::get('/', 'FrontpageController@index')->name('home');
Route::get('/slider', 'FrontpageController@slider')->name('slider.index');

Route::get('/search', 'FrontpageController@search')->name('search');

Route::get('/property', 'PagesController@properties')->name('property');
Route::get('/property/{id}', 'PagesController@propertieshow')->name('property.show');
Route::post('/property/message', 'PagesController@messageAgent')->name('property.message');
Route::post('/property/comment/{id}', 'PagesController@propertyComments')->name('property.comment');
Route::post('/property/rating', 'PagesController@propertyRating')->name('property.rating');
Route::get('/property/city/{cityslug}', 'PagesController@propertyCities')->name('property.city');

Route::get('/agents', 'PagesController@agents')->name('agents');
Route::get('/agents/{id}', 'PagesController@agentshow')->name('agents.show');

Route::get('/gallery', 'PagesController@gallery')->name('gallery');

Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/blog/{id}', 'PagesController@blogshow')->name('blog.show');
Route::post('/blog/comment/{id}', 'PagesController@blogComments')->name('blog.comment');

Route::get('/blog/categories/{slug}', 'PagesController@blogCategories')->name('blog.categories');
Route::get('/blog/tags/{slug}', 'PagesController@blogTags')->name('blog.tags');
Route::get('/blog/author/{username}', 'PagesController@blogAuthor')->name('blog.author');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@messageContact')->name('contact.message');

// xample halaman review demo
Route::get('/about', 'FrontpageController@about')->name('about');

Route::get('/properties/detail', 'FrontpageController@properties')->name('properties');
Route::get('/properties/grid', 'FrontpageController@propertiesGrid')->name('propertiesGrid');
Route::get('/properties/list', 'FrontpageController@propertiesList')->name('propertiesList');

Route::get('/news/detail', 'FrontpageController@news')->name('news');
Route::get('/news/grid', 'FrontpageController@newsGrid')->name('newsGrid');
Route::get('/news/list', 'FrontpageController@newsList')->name('newsList');

Route::get('/dashboard/user', 'FrontpageController@dashboard')->name('dashboard');
Route::get('/dashboard/profile', 'FrontpageController@dashboardProfile')->name('dashboardProfile');
Route::get('/dashboard/messages', 'FrontpageController@dashboardMessages')->name('dashboardMessages');
Route::get('/dashboard/booking/list', 'FrontpageController@dashboardBookingList')->name('dashboardBookingList');

Route::post('booking', 'BookingController@booking')->name('booking');
// End xample halaman review demo


// User Login
Auth::routes();
// Admin Login
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin'],'as'=>'admin.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tags','TagController');
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('features','FeatureController');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::resource('sliders','SliderController');
    Route::resource('services','ServiceController');
    Route::resource('testimonials','TestimonialController');

    Route::resource('booking','BookingController');
    Route::get('booking/detail/{id}','BookingController@detail');

    Route::get('galleries/album','GalleryController@album')->name('album');
    Route::post('galleries/album/store','GalleryController@albumStore')->name('album.store');
    Route::get('galleries/{id}/gallery','GalleryController@albumGallery')->name('album.gallery');
    Route::post('galleries','GalleryController@Gallerystore')->name('galleries.store');

    Route::get('settings', 'DashboardController@settings')->name('settings');
    Route::post('settings', 'DashboardController@settingStore')->name('settings.store');

    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');

});

// Agent Login
Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth','user'],'as'=>'user.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('booking','DashboardController@booking')->name('booking');
    Route::get('booking/list','DashboardController@booking')->name('booking.list');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

});