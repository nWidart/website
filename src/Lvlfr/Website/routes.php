<?php

View::addNamespace('LvlfrWebsite', __DIR__ . '/views');

Route::controller('contact', 'Lvlfr\Website\Controller\ContactController');
Route::controller('/', 'Lvlfr\Website\Controller\HomeController');
