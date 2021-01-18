<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    // public function index()
    // {
    //     if (isset($_SESSION) && isset($_SESSION['user']))
    //     {
    //     $loguser =$_SESSION['user'];
    //     var_dump($loguser);
    //    return view('products', compact('loguser'));
    // }else{return redirect('login');}
    // }
    /**
     * Show all users.
     */
    public function index()
    {
        $loguser =$_SESSION['user'] ;

        $products = App::get('database')->selectAll('products');
$users = App::get('database')->selectAll('users');
        return view('products', compact('products','users'));
    }

    /**
     * Store a new user in the database.
     */
    // public function index2()
    // {
    //     $users = App::get('database')->selectAll('users');

    //     return view('products', compact('users'));
    // }

    public function store()
    {
        App::get('database')->insert('products', [
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'description' => $_POST['description']

        ]);

        return redirect('products');
    }
    public function delete()
    {
       App::get('database')->delete('products');

       return redirect('products');
    }
    public function delete2()
    {
       App::get('database')->delete('users');

       return redirect('products');
    }
}
