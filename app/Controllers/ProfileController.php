<?php

namespace App\Controllers;

use App\Models\UserModel;
use DateTime;
use DateTimeZone;

class ProfileController extends BaseController
{
    public function login()
    {   
        return view('users/login');
    }

    public function register()
    {
        return view('users/register');
    }

    public function storeRegister()
    {
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email',
            'photo'         =>  'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]|max_size[photo,4096]',
            'password'      => 'required|min_length[4]|max_length[50]',
        ];
        
        if($this->validate($rules)){
            $userModel = new UserModel();
            $img = $this->request->getFile('photo');
            $img->move(WRITEPATH . '../public/assets/photo/');
            
            $datetime = new DateTime();
            $timezone = new DateTimeZone('Asia/Jakarta');
            $datetime->setTimezone($timezone);
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'photo'    => $img->getName(),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'created_at' => $datetime->format('Y-m-d H:i:s'),
            ];
            $userModel->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            
            return view('users/register', $data);
        }
    }

    public function storeLogin()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'photo' => $data['photo'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
    }
}
