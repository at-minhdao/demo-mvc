<?php

namespace App\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post    = new Post();
        $data['arPosts'] = $post->getAll();
            // dd($data);
        view('home.index', $data);
    }
    public function post($id)
    {
        $post = new Post();
        $data['post'] = $post->find($id);
        view('home.post',$data);
    }
    public function about()
    {
        view('home.about');
    }
    public function login()
    {
        view('home.login');
    }
    public function register()
    {
        view('home.register');
    }
    public function postblog()
    {
        view('home.postblog');
    }
    public function addBlog()
    {
        $arPost['name']         = $_POST['name'];
        $arPost['preview_text'] = $_POST['preview_text'];
        $arPost['detail_text']  = $_POST['detail_text'];
        $arPost['user_id']      = $_SESSION['id'];
        $arPost['date_create']  = date('Y-m-d H:i:s');
        // dd($arPost);
        $post = new Post();
        $result = $post->addPost($arPost);
        if ($result) {
            header('location: /home/index');
        } else {
            echo "Fail!";
        }
    }

}