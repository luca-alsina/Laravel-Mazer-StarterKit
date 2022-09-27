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
        'login'     => [
            'title'                 => 'Login',
            'subtitle'              => 'Login to your account',

            'forgot_password'       => 'Forgot Password ?',
            'not_registered'        => 'Account not registered ?',

            'button'                => 'Login',

        ],
        'register'  => [
            'title'                 => 'Register',
            'subtitle'              => 'Create a new account',

            'already_have_account'  => 'Already have an account ?',

            'button'                => 'Register',
        ],
        'forgot_password'   => [
            'title'                 => 'Forgot Password',
            'subtitle'              => 'Reset your password',

            'remember_account'      => 'Remember your account ?',

            'button'                => 'Send Password Reset Link',
        ],
        'reset_password'    => [
            'title'                 => 'Reset Password',
        ],
        'verify_email'  => [
            'title'                 => 'Verify Email',
            'resend_verification'   => 'Resend Verification',
        ],
        'logout'                    => 'Logout',
    ],

    'fields'    => [
        'username'          => 'Username',
        'email'             => 'Email',
        'password'          => 'Password',
        'password_confirm'  => 'Confirm Password',
        'first_name'        => 'First Name',
        'last_name'         => 'Last Name',
        'phone'             => 'Phone',
        'remember'          => 'Remember Me',
    ],

];
