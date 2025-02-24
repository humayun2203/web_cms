<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
}
