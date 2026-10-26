<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old records if re-seeding
        Customer::truncate();
        User::truncate();

        // Seed Customers
        Customer::create(['fullname' => 'John Doe', 'email' => 'john@gmail.com', 'phone' => '09123456789']);
        Customer::create(['fullname' => 'Jane Smith', 'email' => 'jane@gmail.com', 'phone' => '09234567890']);
        Customer::create(['fullname' => 'Mark Lee', 'email' => 'mark@gmail.com', 'phone' => '09345678901']);
        Customer::create(['fullname' => 'Anna Cruz', 'email' => 'anna@gmail.com', 'phone' => '09456789012']);
        Customer::create(['fullname' => 'Peter Tan', 'email' => 'peter@gmail.com', 'phone' => '09567890123']);

        // Seed Users
        User::create(['username' => 'admin', 'fullname' => 'System Administrator', 'role' => 'Admin']);
        User::create(['username' => 'cashier1', 'fullname' => 'Maria Santos', 'role' => 'Cashier']);
        User::create(['username' => 'cashier2', 'fullname' => 'Juan Dela Cruz', 'role' => 'Cashier']);
        User::create(['username' => 'manager1', 'fullname' => 'Carlos Reyes', 'role' => 'Manager']);
        User::create(['username' => 'staff1', 'fullname' => 'Angela Lim', 'role' => 'Staff']);
    }
}