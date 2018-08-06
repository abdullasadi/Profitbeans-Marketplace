<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog\Categories;
use ImgModify;

class FrontController extends Controller {
    public function index() {
      $categories = Categories::with('child')->get();
      return view('home', ['categories' => $categories]);
    }
}
