<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptlogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        dd($username, $password);

        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $username)
            ->first();

        if (!$user) {

            return redirect()
                ->back()
                ->with('error', 'Invalid Username');
        }

        if (!password_verify($password, $user['password'])) {

            return redirect()
                ->back()
                ->with('error', 'Invalid Password');
        }

        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'logged_in' => true
        ]);

        return redirect()->to('/customers');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}