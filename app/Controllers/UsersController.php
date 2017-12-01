<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Post;

class UsersController extends Controller
{
    public function login()
    {
        view('users.login');
    }
    public function register()
    {
        view('users.register');
    }
    public function addBlog()
    {
        view('users.addblog');
    }

    public function postLogin()
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
    public function postRegister()
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
    public function postAddBlog()
    {
        $arPost['name']         = $_POST['name'];
        $arPost['preview_text'] = $_POST['preview_text'];
        $arPost['detail_text']  = $_POST['detail_text'];
        $arPost['user_id']      = $_SESSION['id'];
        $arPost['date_create']  = date('Y-m-d H:i:s');
        // dd($arPost);
        $post = new Post();
        // echo "string";die();
        $result = $post->addPost($arPost);
        if ($result) {
            header('location: /home/index');
        } else {
            echo "Fail!";
        }
    }
    
}