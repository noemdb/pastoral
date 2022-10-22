<?php

Route::group(['middleware' => ['is_admin']], function() {            
    Route::prefix('admin')->group(function () {
        require (__DIR__ . '/resource/setups.php');
        require (__DIR__ . '/resource/institutions.php');            
        require (__DIR__ . '/resource/competitors.php');            
        require (__DIR__ . '/resource/professorate.php');            
        require (__DIR__ . '/resource/senders.php');            
        require (__DIR__ . '/resource/pollmains.php');            
        require (__DIR__ . '/resource/bmains.php');
    });
});

