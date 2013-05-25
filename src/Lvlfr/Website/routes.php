<?php

View::addNamespace('LvlfrWebsite', __DIR__ . '/views');


Route::controller('/', 'Lvlfr\Website\Controller\HomeController');
