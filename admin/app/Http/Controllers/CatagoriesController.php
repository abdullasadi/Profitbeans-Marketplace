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
        'seo_url' => 'required',
        'meta_tag_title' => 'required'
      ]);
      $data = $request->all();
      $data['description'] = htmlspecialchars($data['description']);

      if(!isset($data['on_menu'])) {
        $data['on_menu'] = 0;
      }
      if(!isset($data['status'])) {
        $data['status'] = 0;
      }

      $add = Catagories::create([
        'name' => $data['name'] ? $data['name'] : '',
        'description' => $data['description'],
        'parent_id' => '0',
        'seo_url' => $data['seo_url'],
        'meta_tag_title' => $data['meta_tag_title'] ? $data['meta_tag_title'] : '',
        'meta_tag_description' => $data['meta_tag_description'] ? $data['meta_tag_description'] : '',
        'meta_tag_keywords' => $data['meta_tag_keywords'] ? $data['meta_tag_keywords'] : '',
        'menu_column' => $data['menu_column'] ? $data['menu_column'] : '',
        'on_menu' => $data['on_menu'],
        'status' => $data['status'],
        'sort_order' => $data['sort_order'] ? $data['sort_order'] : ''
      ]);

      if($add) {
        $request->session()->flash('success', 'Category has been added!');
      } else {
        $request->session()->flash('error', 'Categroy could not add!');
      }

      return redirect('/categories');
    }
}
