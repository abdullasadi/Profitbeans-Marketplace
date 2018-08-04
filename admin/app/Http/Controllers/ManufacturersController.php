<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturers;
use Config;

class ManufacturersController extends Controller {
	public function index() {
		$manufacturers = Manufacturers::all();
		return view('manufacturers', ['manufacturers' => $manufacturers]);
	}


	public function addManufacturers() {
		return view('add-manufacturer');
	}


	public function create(Request $request) {
		$data = $request->validate([
			'name' => 'required',
			'slug' => 'required',
			'sort_order' => 'required',
		]);

		if ($request->hasFile('image')) {
			$request->validate([
		    'image' => 'image|mimes:jpg,jpeg,png,gif',
		  ]);
      $image = $request->file('image');
      $name = $image->getClientOriginalName();
      $destinationPath = Config::get('app.image_path').'catalog/';
      $image->move($destinationPath, $name);
    }

		$manObj = new Manufacturers();
		$manObj->name = $data['name'];
		$manObj->slug = $data['slug'];
		$manObj->sort_order = $data['sort_order'];
		$manObj->image = isset($name) ? 'catalog/'.$name : 'default';

		if ($manObj->save()) {
			$request->session()->flash('success', 'Manufacturer has been added!');
		} else {
			$request->session()->flash('error', 'Manufacturer could not add!');
		}

		return redirect('/manufacturers');
	}
}
