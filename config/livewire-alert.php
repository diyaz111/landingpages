<?php

/*
 * For more details about the configuration, see:
 * https://sweetalert2.github.io/#configuration
 */
return [
    'alert' => [
        'position' => 'center',
        'timer' => 3000,
        'toast' => true,
        'icon' => 'succsess',
        'text' => null,
        'showCancelButton' => false,
        'showConfirmButton' => false
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'center',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'cancelButtonText' => 'No',
        'confirmButtonColor' => '#3085d6',
        'cancelButtonColor' => '#d33'
    ]
];
