<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'description' => $_POST['description']

        ]);

        return redirect('users');
    }
}
