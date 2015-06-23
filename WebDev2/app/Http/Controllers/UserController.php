<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {





	public function login()
	{
		return view('dozent.login');
	}


	public function index()
	{
		return User::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		User::create(array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'password' => Input::get('password')
		));
		
		return Response::json(array('success' => true));
		
	}
}