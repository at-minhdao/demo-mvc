<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function login()
    {
        view('users.login');
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
    public function show($id)
    {
        $data['id'] = $id;
        view('users.show', $data);
    }
    public function test()
    {
        view('users.test');
    }
    public function getAll()
    {
        $user = new User();
        $arUser = $user->all();
        echo "<pre>";
        print_r($arUser);
        echo "</pre>";
    }
}