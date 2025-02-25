<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins'; // Veritabanı tablosu
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password']; // İzin verilen alanlar

    // Şifreyi hashleyerek kaydetme
    public function createAdmin($email, $password)
    {
        return $this->insert([
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Şifreyi hashle
        ]);
    }
}
