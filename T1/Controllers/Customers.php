<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'John Doe',
                'email' => 'john@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Jane Smith',
                'email' => 'jane@gmail.com',
                'phone' => '09234567890'
            ],
            [
                'fullname' => 'Mark Lee',
                'email' => 'mark@gmail.com',
                'phone' => '09345678901'
            ],
            [
                'fullname' => 'Anna Cruz',
                'email' => 'anna@gmail.com',
                'phone' => '09456789012'
            ],
            [
                'fullname' => 'Peter Tan',
                'email' => 'peter@gmail.com',
                'phone' => '09567890123'
            ]
        ];

        return view('customers', $data);
    }
}