<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Sprechstunde;
use App\Dozent;
use App\Termin;
class SprechstundenController extends Controller {

	
	
	public function index($id)
	{
		try {
			$dozent = Dozent::find($id);
			Auth::login($dozent);
			echo $dozent->nachname;
			return Sprechstunde::where('dozentID', '=', $id)->get();
		} catch (\Exception $e) {
			echo $e;
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//ve
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// 		try {

		// 			$sprechstunde = new Sprechstunde;
		// 			$sprechstunde->datum   	 = $request->input('datum');
		// 			$sprechstunde->dauer   	 = $request->input('dauer');
		// 			$sprechstunde->uhrzeit	 = $request->input('uhrzeit');
		// 			$sprechstunde->raum   	 = $request->input('raum');
		// 			$sprechstunde->interval  = $request->input('intervall');
		// 			$sprechstunde->

		// 			$user->save();
		// 		}
		// 		catch (\Exception $error)
		// 		{
		// 			echo $error;
		// 		}

			echo $id;
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function show($dozentID,$sprechstundenID)
		{
			return Termin::where('sprechstundenID', '=', $sprechstundenID)->get();
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function edit($id)
		{
			return 'edit the user';
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
