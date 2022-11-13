<?php

return [

    'pages' => [
        'dashboard'   => [
            'title'     => 'Admin Dashboard',
            'users'     => 'Users',
        ],
        'user'       => [
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
        'categories' => [
            'title'     => 'Categories',
            'create'    => 'Create Category',
            'update'    => 'Update Category',
            'edit'      => 'Edit Category',
            'delete'    => 'Delete Category',
            'alerts'    => [
                'created' => 'Category created successfully',
                'updated' => 'Category updated successfully',
                'deleted' => 'Category deleted successfully',
            ],
            'index' => [
                'id'            => 'ID',
                'title'         => 'Categories',
                'name'          => 'Name',
                'slug'          => 'Slug',
                'parent'        => 'Parent',
                'description'   => 'Description',
                'actions'       => 'Actions',
                'edit'          => 'Edit',
                'delete'        => 'Delete',
            ],
        ],
        'products'   => [
            'title'     => 'Products',
            'create'    => 'Create Product',
            'update'    => 'Update Product',
            'edit'      => 'Edit Product',
            'delete'    => 'Delete Product',
            'alerts'    => [
                'created' => 'Product created successfully',
                'updated' => 'Product updated successfully',
                'deleted' => 'Product deleted successfully',
            ],
            'index' => [
                'id'            => 'ID',
                'title'         => 'Products',
                'name'          => 'Name',
                'slug'          => 'Slug',
                'description'   => 'Description',
                'actions'       => 'Actions',
                'edit'          => 'Edit',
                'delete'        => 'Delete',
            ],
        ],
    ],

    'footer' => [
        'copyright' => '2022 &copy; ' . config('app.name'),
        'credits' => 'Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <ahref="https://saugi.me">Saugi</a>. Adapted in Laravel StarterKit by <a href="https://alsinaluca.fr">Luca</a>',
    ],

];
