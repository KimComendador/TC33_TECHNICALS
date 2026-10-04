<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->where('is_archived',0)
            ->findAll();

        return view('tasks/index',$data);
    }

    public function create()
    {
        return view('tasks/new');
    }

    public function store()
    {
        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if(!$this->validate($rules))
        {
            return redirect()->back()
            ->withInput();
        }

        $model = new TaskModel();

        $model->save([
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $model = new TaskModel();

        $data['task'] = $model->find($id);

        return view('tasks/edit',$data);
    }

    public function update($id)
    {
        $model = new TaskModel();

        $model->update($id,[
            'title'=>$this->request->getPost('title'),
            'status'=>$this->request->getPost('status'),
            'task_date'=>$this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TaskModel();

        $model->update($id,[
            'is_archived'=>1
        ]);

        return redirect()->to('/tasks');
    }
}