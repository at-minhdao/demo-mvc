<?php

    namespace App\Controllers;

    use App\Models\User;

    class UsersController extends Controller
    {
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