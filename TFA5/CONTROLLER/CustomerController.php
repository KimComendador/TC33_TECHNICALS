<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = [
            ['id' => 1, 'fullname' => 'John Doe', 'email' => 'john@gmail.com', 'phone' => '09123456789'],
            ['id' => 2, 'fullname' => 'Jane Smith', 'email' => 'jane@gmail.com', 'phone' => '09234567890'],
            ['id' => 3, 'fullname' => 'Mark Lee', 'email' => 'mark@gmail.com', 'phone' => '09345678901'],
            ['id' => 4, 'fullname' => 'Anna Cruz', 'email' => 'anna@gmail.com', 'phone' => '09456789012'],
            ['id' => 5, 'fullname' => 'Peter Tan', 'email' => 'peter@gmail.com', 'phone' => '09567890123'],
        ];

        return view('customers', compact('customers'));
    }
}