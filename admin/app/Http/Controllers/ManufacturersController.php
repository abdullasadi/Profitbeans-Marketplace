<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturers;

class ManufacturersController extends Controller {
	public function index() {
		$mans = Manufacturers::all();
		return view('manufacturers', ['manufacturers' => $mans]);
	}
	public function addManufacturers() {
		return view('add-manufacturer');
	}

	public function create(Request $request) {
		$data = $request->validate([
			'name' => 'required',
			'slug' => 'required',
			'sort_order' => 'required',
			'image' => 'required'
		]);

		$manObj = new Manufacturers();
		$manObj->name = $data['name'];
		$manObj->slug = $data['slug'];
		$manObj->sort_order = $data['sort_order'];
		$manObj->image = $data['image'];

		if ($manObj->save()) {
			$request->session()->flash('success', 'Manufacturer has been added!');
		} else {
			$request->session()->flash('error', 'Manufacturer could not add!');
		}

		return redirect('/manufacturers');
	}
}
