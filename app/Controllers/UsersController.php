<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function login()
    {
        $arUser = array();
        $arUser['username'] = $_POST['username'];
        $arUser['password'] = $_POST['password'];

        $user      = new User();
        $userCheck = $user->checkUser($arUser);
        if ($userCheck['password'] == $arUser['password']) {
            $_SESSION['userLogin'] = $userCheck;
            // view('home.index');
            header('location: /home/index');
        } else {
            $data['username'] = $arUser['username'];
            $data['password'] = $arUser['password'];
            $data['msg']      = "Wrong username or password!";
            view('home.login',$data);
        }
    }
    public function logout()
    {
        session_destroy();
        header('location: /home/index');
    }
    public function register()
    {
        $arUser = array();
        $arUser['username'] = $_POST['username'];
        $arUser['fullname'] = $_POST['fullname'];
        $arUser['password'] = $_POST['password'];

        $user = new User();
        $result = $user->addUser($arUser);
        if ($result) {
            $data['msg'] = "Success!";
        } else {
            $data['msg'] = "Fail!";
        }
        view('home.register',$data);
    }
    
}