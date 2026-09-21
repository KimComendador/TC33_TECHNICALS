<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'System Administrator',
                'role' => 'Admin'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Juan Dela Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Carlos Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Angela Lim',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}