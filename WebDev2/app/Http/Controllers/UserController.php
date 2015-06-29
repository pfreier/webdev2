<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Dozent;
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
		// 		echo "create called!";

		// 		$nerd = new User;
		// 		$nerd->name       = "ocak2";
		// 		$nerd->email      = "test@t.de";
		// 		$nerd->password = "test";

		// 		echo "before save";

		// 		$nerd->save();

		// 		echo "saved";

		return view('dozent.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		try {

			$user = new User;
			$user->name       = $request->input('name');
			$user->email      = $request->input('email');
			$user->password = $request->input('password');



			$user->save();

			$dozent = new Dozent;
			$dozent->vorname = $request->input('vorname');
			$dozent->nachname = $request->input('name');
			$dozent->userID = $user->id;
			
			$dozent->save();
		}
		catch (\Exception $e)
		{
			echo $e;
		}

	}

	public function show($id){

		return User::where('id', '=', $id)->get();
	}
	
	public function delete($id){
		$user = User::find($id);
		$user->delete();
	}
}