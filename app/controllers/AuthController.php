<?php namespace App\Controllers;

use App\Models\User;
use Sirius\Validation\Validator;
use App\Controllers\BaseController;

class AuthController extends BaseController
{
  public function getLogin(){

    return $this->render('auth/login.twig');
  }

  public function postLogin(){}

  public function getLogout(){
    unset($_SESSION['userId']);
    header('Location:'.BASE_URL.'auth/login');
  }

}

?>
