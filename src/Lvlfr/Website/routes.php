<?php

Route::group(array('domain' => Config::get('app.domain')), function() {
    Route::controller('contact', 'Lvlfr\Website\Controller\ContactController');
    Route::controller('/', 'Lvlfr\Website\Controller\HomeController');
});
