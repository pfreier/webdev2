<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dozent;
use Illuminate\Http\Request;


class DozentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
// 		try{
// 			$statusCode = 200;
// 			$response = [
// 					'dozents'  => []
// 			];

// 			$dozents = Dozent::all()->take(4);

// 			foreach($dozents as $dozent){

// 				$response['dozents'][] = [
// 						'id' => $dozent->id,
// 						'vorname' => $dozent->vorname,
// 						'nachname' => $dozent->nachname,
// 						'userID' => $dozent->userID,
// 				];
// 			}

// 		}catch (Exception $e){
// 			$statusCode = 400;
// 		}finally{
// 			return Response::json($response, $statusCode);
// 		}
		return Dozent::all();
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
	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
// 		try{
// 			$dozent = Dozent::find($id);
// 			$statusCode = 200;
// 			$response = [ "dozent" => [
// 					'id' => (int) $id,
// 					'vorname' => (int) $dozent->user_id,
// 					'nachname' => $dozent->title,
// 					'userID' => $dozent->url
// 			]];
		
// 		}catch(Exception $e){
// 			$response = [
// 					"error" => "File doesn`t exists"
// 			];
// 			$statusCode = 404;
// 		}finally{
// 			return Response::json($response, $statusCode);
// 		}
		
		return Dozent::find($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
