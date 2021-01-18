<?php
namespace App\Controllers;
use App\Core\App;

class RegisterController
{
    public function index()
    {
        $users  = App::get('database')->selectAll('users');
        return view('register', compact('users')); 
    }

    public function store()
    {
        $data = [
            'username' => $_POST['username'],
            'password'   =>password_hash($_POST['password'], PASSWORD_DEFAULT),
            'email' => $_POST['email'],
            'fullname'   => $_POST['fullname'],
        ];
     
        App::get('database')->insert('users',$data);
        echo 'you have been registerd!';
        return redirect('register');
    }

}