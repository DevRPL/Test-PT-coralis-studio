<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','email','password','photo','created_at'];

    public function getUserById($id)
    {
        $query = $this->db->table($this->table)->getWhere(['id' => $id]);
        return $query->getRow();
    }
}