<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = [
            ['id' => 2, 'username' => 'admin', 'fullname' => 'System Administrator', 'role' => 'Admin'],
            ['id' => 3, 'username' => 'cashier1', 'fullname' => 'Maria Santos', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'cashier2', 'fullname' => 'Juan Dela Cruz', 'role' => 'Cashier'],
            ['id' => 5, 'username' => 'manager1', 'fullname' => 'Carlos Reyes', 'role' => 'Manager'],
            ['id' => 6, 'username' => 'staff1', 'fullname' => 'Angela Lim', 'role' => 'Staff'],
        ];

        return view('users', compact('users'));
    }
}
