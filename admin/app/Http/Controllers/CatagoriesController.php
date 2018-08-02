<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagories;

class CatagoriesController extends Controller {

    public function index() {
      $cat = Catagories::all();
      return view('categories', ['categories' => $cat]);
    }

    public function add_category() {
      return view('add-category');
    }

    public function create(Request $request) {
      $data =  $request->validate([
        'name' => 'required',
        'description' => 'required',
        'seo_url' => 'required',
        'meta_tag_title' => 'required',
        'meta_tag_description' => 'required',
        'meta_tag_keywords' => 'required',
        'menu_column' => 'required',
        'sort_order' => 'required',
        'status' => 'required',
        'on_menu' => 'required',
      ]);
      return $data;
    }
}
