<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagories;
use Config;
use ImgModify;

class CatagoriesController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index() {
    $allCagetoris = Catagories::all();
    return view('categories', ['categories' => $allCagetoris, 'title' => 'Categries']);
  }

  public function add_category() {
    return view('add-category', ['title' => 'Add Category']);
  }

  public function create(Request $request) {
    $data =  $request->validate([
      'name' => 'required',
      'seo_url' => 'required',
      'meta_tag_title' => 'required'
    ]);

    if ($request->hasFile('img')) {
      $request->validate([
		    'img' => 'image|mimes:jpg,jpeg,png,gif',
		  ]);
      $image = $request->file('img');
      $name = time().'-'.uniqid(10).'-'.$image->getClientOriginalName();
      $destinationPath = Config::get('app.image_path').'catalog/';
      $image->move($destinationPath, $name);
    }else{
      $name = 'default';
    }

    $data = $request->all();
    $data['description'] = htmlspecialchars($data['description']);

    $catObj = new Catagories;
    $catObj->name = $data['name'] ? $data['name'] : '';
    $catObj->description = $data['description'] ? $data['description'] : '';
    $catObj->parent_id = $data['parent_id'] ? $data['parent_id'] : '0';
    $catObj->seo_url = $data['seo_url'] ? $data['seo_url'] : '';
    $catObj->meta_tag_title = $data['meta_tag_title'] ? $data['meta_tag_title'] : '';
    $catObj->meta_tag_description = $data['meta_tag_description'] ? $data['meta_tag_description'] : '';
    $catObj->meta_tag_keywords = $data['meta_tag_keywords'] ? $data['meta_tag_keywords'] : '';
    $catObj->menu_column = $data['menu_column'] ? $data['menu_column'] : '0';
    $catObj->on_menu = isset($data['on_menu']) ? '1' : '0';
    $catObj->status = isset($data['status']) ? '1' : '0';
    $catObj->sort_order = isset($data['sort_order']) ? '1' : '0';
    $catObj->image = $name ? 'catalog/'.$name : 'default';

    if($catObj->save()) {
      $request->session()->flash('success', 'Category has been added!');
    } else {
      $request->session()->flash('error', 'Categroy could not add!');
    }

    return redirect('/categories');
  }



  public function ajax_request(Request $request) {
    $rq = $request->all();
    if($rq['type'] == "autocomplete") {
      $categories = Catagories::with('children')->get();
      $catAll = array();

      foreach($categories as $cat){
        if($cat->parent_id == '0'){
          $parentName = $cat->name;
          $catArr = array('id'=> $cat->id, 'name'=> $cat->name,  'text'=> $parentName, 'image'=> ImgModify::resize($cat->image, 40, 40));
          array_push($catAll, $catArr);
        }

        foreach($cat->children as $catCh){
            $childName = $cat->name .' > '. $catCh->name;
            $catArr = array('id'=> $catCh->id, 'name'=> $catCh->name, 'text'=> $childName, 'image'=> ImgModify::resize($catCh->image, 40, 40));
            array_push($catAll, $catArr);
        }
      }

      return $catAll;

    } elseif($rq['type'] == 'onMenuChange') {
      $updateMenu = Catagories::find($rq['id']);
      $value = $updateMenu->on_menu;
      $updateMenu->on_menu = $value == '1' ? '0' : '1';
      if($updateMenu) {
        if($updateMenu->save()) {
          return $updateMenu;
        }
      }
    }


  }



}
