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

    }