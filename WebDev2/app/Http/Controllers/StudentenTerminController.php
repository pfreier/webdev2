<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Termin;

use Illuminate\Http\Request;

class StudentenTerminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($tokenCode)
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show($tokenCode)
	{
		return Termin::where('tokenCode', '=', $tokenCode)->get();
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

	public function destroy($tokenCode)
	{
		echo "hallo";
// 		try {
// 			$termin = Termin::find($tokenCode);
// 			echo $termin->tokenCode;
			
// 		} catch (Exception $e) {
// 			echo $e;
// 		}
		
	}

}
