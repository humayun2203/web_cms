<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }

    public function loginAuth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $admin = $adminModel->where('email', $email)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $session->set([
                    'admin_id' => $admin['id'],
                    'admin_email' => $admin['email'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to(base_url('admin/dashboard'));
            } else {
                $session->setFlashdata('error', 'Yanlış şifre.');
                return redirect()->to(base_url('admin/login'));
            }
        } else {
            $session->setFlashdata('error', 'E-posta bulunamadı.');
            return redirect()->to(base_url('admin/login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('admin/login'));
    }
}

public function dashboard()
{
    return view('admin/dashboard');
}
