<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data['title'] = 'Customers';
        $data['customers'] = $customerModel->findAll();

        return view('customers/index', $data);
    }
}