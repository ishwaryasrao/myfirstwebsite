<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Input;
use Illuminate\Support\Facades\DB;
use App\Users;

Class UserController extends Controller
{
	// function index()
	// {


	//    $users = \App\Users::all();
 //      return view('Users.index',['all_Users'=>$users]);
 //    // echo $users;
 //        echo '<pre>';
 //        print_r($users);
 //        echo '</pre>';
 //    }

	// public function showwelcome()
 //    {
 //       $userdata = array(
 //                'email'     => Input::get('email'),
 //                'password'  => Input::get('password')
 //            );
 //       $user = DB::table('Users')->where('username', Input::get('name'))->first();
 //       if($user)
 //       {
 //            $name = $user->username;
            
 //            return View::make('login1',['all_Users'=>$name]);
 //        }else
 //        {
 //            $error ='You are not registered... :) Welcome to our system';
 //            return View::make('login1',['all_Users'=>$error]);
 //        }

 //        // show the form
 //      //return View::make('welcome',['all_Users'=>$user->name]);
 //    }
   
    public function showLogin()
    {
        // show the form
      return View::make('login');
    }

   public function getHomeData()
   {
     $sub = DB::table('subcategories')->where('subcategoryname', 'Movies')->get();
  // dd($user->name);

    return View::make('cards',['userdata'=>$sub]);
      // return View::make('cards',['all_users'=>'Hi']);
   }
  
}