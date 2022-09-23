<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'page'  => [
        'login' => [
            'title'         => 'Login',
            'subtitle'      => 'Login to your account',

            'forgot_password'   => 'Forgot Password ?',

            'fields'    => [
                'username'      => 'Username',
                'email'         => 'Email',
                'password'      => 'Password',
                'first_name'    => 'First Name',
                'last_name'     => 'Last Name',
                'phone'         => 'Phone',
                'remember'      => 'Remember Me',
            ],
        ],
        'register'              => [
            'title'         => 'Register',
        ],
        'forgot_password'       => [
            'title'         => 'Forgot Password',
        ],
        'reset_password'        => [
            'title'         => 'Reset Password',
        ],
        'verify_email'          => [
            'title'         => 'Verify Email',
            'resend_verification'   => 'Resend Verification',
        ],
        'logout'                => 'Logout',
    ],

];
