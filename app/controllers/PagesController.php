<?php

namespace App\Controllers;
use App\Core\App;
class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Nart Portfolio';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
    /**
     * Show the about culture page.
     */
    public function products()
    {
        $company = 'Products';
        return view('products',['company' => $company]);
    }
}
