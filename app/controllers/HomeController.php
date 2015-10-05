<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	 public function formProcess(){
		$data=Input::all();
		//gets all input fields data
         $user= new User;


         $user->fname=$data['fname'];
         $user->lname=$data['lname'];
         $user->email=$data['email'];
         $user->password= Hash::make($data['password']);

         $user->save();
         return Redirect::to('/display');
}

    public function getdata(){


		$users = User::all();

		$message = "Data just in:";
		return View::make('displaydata', ['users'=>$users, 'message'=>$message]);


    }
}
