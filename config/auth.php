<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,


    /*
    |--------------------------------------------------------------------------
    | Registration specific settings
    |--------------------------------------------------------------------------
    |
    | Here you may define the settings for registration of new users.
    | By default, the registration is enabled and the user is redirected to the home page after registration.
    | Also, by default, only the password, username and email information are asked.
    |
    */

    'registration' => [
        'enabled' => true, // Has no effect atm
        'redirect' => '/', // Has no effect atm
        'fields' => [
            'password' => [
                'enabled' => true, // Can't be disabled
                'type' => 'password', // Can't be changed
                'validation' => 'required|string|confirmed|min:8',
            ],
            'username' => [
                'enabled' => true,
                'type' => 'text',
                'validation' => 'required|string|max:255|unique:users',
            ],
            'email' => [
                'enabled' => true, // Can't be disabled
                'type' => 'email',
                'validation' => 'required|string|email|max:255|unique:users',
            ],
            'first_name' => [
                'enabled' => true,
                'type' => 'text',
                'validation' => 'nullable|string|max:255',
            ],
            'last_name' => [
                'enabled' => true,
                'type' => 'text',
                'validation' => 'nullable|string|max:255',
            ],
        ],
    ],

];
