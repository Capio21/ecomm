<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{


  public function register()
{
  // Load the form helper
  helper(['form']);

  // Define validation rules
  $rules = [
      'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
      'password' => 'required|min_length[4]|max_length[50]',
      'confirmpassword' => 'matches[password]'
  ];

  // Validate the user input
  if ($this->validate($rules)) {
      // Validation successful, proceed with user registration
      $userModel = new UserModel();
      $data = [
          'username' => $this->request->getVar('username'),
          'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
      ];

      $userModel->save($data);

      // Redirect to the signin page
      return redirect()->to('/signin');
  } else {
      // Validation failed, show the signup form with validation errors
      $data['validation'] = $this->validator;
      return view('signup', $data);
  }
}
public function loginAuth()
{
    $session = session();
    $userModel = new UserModel();

    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $data = $userModel->where('username', $username)->first();

    if ($data) {
        $storedPassword = $data['password'];

        // Verify the password
        if (password_verify($password, $storedPassword)) {
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'isLoggedIn' => true
            ];

            $session->set($ses_data);
            return redirect()->to('/profile');
        } else {
            $session->setFlashdata('msg', 'Password is incorrect.');
            return redirect()->to('/signin');
        }
    } else {
        $session->setFlashdata('msg', 'Username does not exist.');
        return redirect()->to('/signin');
    }
}


}
