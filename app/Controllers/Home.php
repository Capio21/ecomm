<?php

namespace App\Controllers;
use App\Models\ProductModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('source/index');
    }
    public function product()
    {
      $productModel = new ProductModel();
      $data['products'] = $productModel->findAll();
       return view('include/product', $data);

    }
    public function first()
    {
      return view('source/index');
    }

}
