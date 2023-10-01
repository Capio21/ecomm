<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controller\UserController;
use App\Models\UserModel;

class LoginController extends BaseController
{
  public function index()
  {
      return view('login');
  }
  public function signup()
  {
      return view('signup');
  }



}
