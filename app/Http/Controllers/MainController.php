<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class MainController extends Controller {
	public function storeItem(Request $request) {
		$data = new Data ();
		$data->name = $request->name;
		$data->age = $request->age;
		$data->profession = $request->profession;
		$data->save ();
		return $data;
	}
	public function readItems() {
		$data = Data::all ();
		return $data;
	}
	public function deleteItem(Request $request) {
		$data = Data::find ( $request->id )->delete ();
	}
	public function editItem(Request $request, $id){
		$data =Data::where('id', $id)->first();
		$data->name = $request->get('val_1');
		$data->age = $request->get('val_2');
		$data->profession = $request->get('val_3');
		$data->save();
		return $data;
	}
}