<?php


namespace App\Controller\Chanel;


use App\Model\UserModel;

class UserController
{
    protected $userModel;

    public function __construct(){
        $this->userModel= new UserModel();
    }


    public function sigup(){


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'signup.php';
        }else{
            $this->userModel->saveUser($_REQUEST);
        }
    }

    public function createUser($data) {

            $this->userModel->saveUser($data);

    }

    public function login($data){
        $this->userModel->login($data);
    }




}