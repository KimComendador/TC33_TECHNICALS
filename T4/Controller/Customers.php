<?php

namespace App\Controllers;

class Customers extends BaseController
{
   public function index()
{
    $model = new CustomerModel();
    $data['customers'] = $model->findAll();

    return view('customers', $data);
}
}