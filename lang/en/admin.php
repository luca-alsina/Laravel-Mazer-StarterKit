<?php

return [

    'pages' => [
        'dashboard' => [
            'title'     => 'Admin Dashboard',
            'users'     => 'Users',
        ],
        'user' => [
            'title'     => 'Users',
            'create'    => 'Create User',
            'edit'      => 'Edit User',
            'delete'    => 'Delete User',
            'index' => [
                'id'        => 'ID',
                'name'      => 'Name',
                'email'     => 'Email',
                'role'      => 'Role',
                'created'   => 'Created',
                'updated'   => 'Updated',
                'actions'   => 'Actions',
            ],
        ],
    ],

    'footer' => [
        'copyright' => '2022 &copy; ' . config('app.name'),
        'credits' => 'Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <ahref="https://saugi.me">Saugi</a>. Adapted in Laravel StarterKit by <a href="https://alsinaluca.fr">Luca</a>',
    ],

];
