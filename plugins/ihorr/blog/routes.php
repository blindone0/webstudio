<?php

    Route::post(
        'send/commentpost',
            array(
                'uses' => 'Ihorr\Blog\Components\BlogPost@createComment'
            )
    );

    Route::get(
        'api/v1/posts',
            array(
                'uses' => 'Ihorr\Blog\Components\BlogPost@getAllPosts'
            )
    );