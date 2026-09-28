<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('users', $data);
    }

    public function new()
    {
        return view('user_new');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new UserModel();

        $model->save([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new UserModel();

        $data['user'] = $model->find($id);

        return view('user_edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $avatar = $this->request->getFile('avatar');

        $data = [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        if ($avatar && $avatar->isValid()) {

            $newName = $avatar->getRandomName();

            $avatar->move(ROOTPATH . 'public/uploads', $newName);

            $data['avatar'] = $newName;
        }

        $model->update($id, $data);

        return redirect()->to('/users');
    }
}