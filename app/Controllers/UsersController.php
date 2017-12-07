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

        if (empty($arUser['username']) || empty($arUser['password'])) {
            $error['msg'] = "Please enter username and password!";
            view('users.login',$error);
        } else {
            $user   = new User();
            $result = $user->checkUser($arUser);
            if ($result) {
                header('location: /');
            } else {
                $error['msg'] = "Password does not match!";
                view('users.login',$error);
            }
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

        //validate form register
        $error = array();
        if (empty($arUser['password'])) {
            $error['msg'] = "Please enter password!";
        }
        if (empty($arUser['fullname'])) {
            $error['msg'] = "Please enter fullname!";
        }
        if (empty($arUser['username'])) {
            $error['msg'] = "Please enter username!";
        }  
        if (count($error) != 0) {
            view('users.register',$error);
        } else {
            $user = new User();
            $result = $user->addUser($arUser);
            if ($result) {
                header('location: /users/login');
            } else {
                $data['msg'] = "This username has already existed!";                
                view('users.register',$data);            
            }
        }
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