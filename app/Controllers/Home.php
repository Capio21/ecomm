<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('source/index');
    }
    public function product()
    {
      return view('include/product');
    }
    public function Home()
    {
      return view('source/index');
    }
}
