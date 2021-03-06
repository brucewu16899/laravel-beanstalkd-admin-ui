<?php

Route::get('beanstalkd/tubes', [
    'as' => 'beanstalkd.tubes.index',
    'uses' => 'Dionera\BeanstalkdUI\Controllers\TubesController@index',
]);

Route::get('beanstalkd/tubes/{tube}', [
    'as' => 'beanstalkd.tubes.show',
    'uses' => 'Dionera\BeanstalkdUI\Controllers\TubesController@showTube',
]);

Route::delete('beanstalkd/jobs/{job}', [
    'as' => 'beanstalkd.jobs.delete',
    'uses' => 'Dionera\BeanstalkdUI\Controllers\JobsController@delete',
]);

Route::post('beanstalkd/jobs/{job}', [
    'as' => 'beanstalkd.jobs.kick',
    'uses' => 'Dionera\BeanstalkdUI\Controllers\JobsController@kick',
]);

Route::get('api/tube/{tube}', [
    'as' => 'beanstalkd.stats',
    'uses' => 'Dionera\BeanstalkdUI\Controllers\Api\StatsController@statsForTube',
]);
