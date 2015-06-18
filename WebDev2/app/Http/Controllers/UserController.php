<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {


	protected $user;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function login()
	{
		return view('dozent.login');
	}


	public function index()
	{
		// 		try {
		// 			$statusCode = 200;
		// 			$response = [
		// 				'user' => []
		// 			];
		// 			$users = User::all();
			
		// 			foreach ($users as $user){
		// 				$response['user'][] = [
		// 					'name' => $user->name,
		// 					'email' => $user->email
		// 				];
		// 			}
			
		// 		} catch (Exception $e) {
		// 			$statusCode = 404;
		// 		}finally {
		// 			return Response::json($response,$statusCode);
		// 		}

		return User::all();
}

/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()
{
	return view('dozent.register');
}

/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
public function store()
{
	$input = Input::all();
	User::create($input);	
}



	
}
