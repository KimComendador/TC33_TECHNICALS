<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $username)
            ->first();

        if (!$user)
        {
            return redirect()
                ->back()
                ->with('error', 'Invalid Username');
        }

        if (!password_verify($password, $user['password']))
        {
            return redirect()
                ->back()
                ->with('error', 'Invalid Password');
        }

        session()->set([
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'logged_in' => true,
        ]);

        return redirect()->to('/tasks');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}