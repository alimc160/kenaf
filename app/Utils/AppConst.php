<?php

namespace App\Utils;

class AppConst
{
    const ADMIN_ATTR = [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => '12345'
    ];
    const USERS = [
        [
            'name' => 'john',
            'email' => 'john@example.com',
            'password' => '12345'
        ], [
            'name' => 'taylor',
            'email' => 'taylor@example.com',
            'password' => '12345'
        ],
    ];
    const CREDENTIALS_NOT_MATCH = 'Provided credentials does not match';
    const ADMIN = 'Admin';
    const CUSTOMER = 'Customer';
    const USER = 'User';
    const ROLES = [self::ADMIN, self::CUSTOMER];
}
