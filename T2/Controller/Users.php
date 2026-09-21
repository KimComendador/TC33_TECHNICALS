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
                'role' => 'Admin',
                'created_at' => '2024-09-21 21:02:11'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Maria Santos',
                'role' => 'Cashier',
                'created_at' => '2024-09-21 21:02:11'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Juan Dela Cruz',
                'role' => 'Cashier',
                'created_at' => '2024-09-21 21:02:11'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Carlos Reyes',
                'role' => 'Manager',
                'created_at' => '2024-09-21 21:02:11'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Angela Lim',
                'role' => 'Staff',
                'created_at' => '2024-09-21 21:02:11'
            ]
        ];

        return view('users', $data);
    }
}