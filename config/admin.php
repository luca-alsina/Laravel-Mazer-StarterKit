<?php

return [
    'prefix' => 'panel',
    'middleware' => ['web', 'checkAdmin'],
    'namespace' => 'App\Http\Controllers\Admin',
    'as' => 'admin.',
];
