<?php

    Route::post(
        'send/commentpost',
        array(
            'uses' => 'Ihorr\Blog\Components\BlogPost@createComment'
        )
    );