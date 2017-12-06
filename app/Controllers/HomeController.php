<?php

namespace App\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post  = new Post();
        $limit = 5;  
        //current page
        $current_page  = isset($_GET['page']) ? $_GET['page'] : 1;
        //total page
        $total_page    = $post->totalPage($limit);
        //data return
        $data['arPosts']      = $post->pagination($limit);
        $data['current_page'] = $current_page;
        $data['total_page']   = $total_page;
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

}