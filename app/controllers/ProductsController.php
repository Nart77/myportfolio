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
        $products = App::get('database')->selectAll('products');

        return view('products', compact('products'));
    }

    /**
     * Store a new user in the database.
     */
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
}
