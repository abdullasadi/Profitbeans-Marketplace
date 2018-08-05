<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Catagories;
use App\Manufacturers;

class ProductsController extends Controller {
  public function index() {
		return view('products');
	}
  public function addProduct() {
    return view('add-product');
  }
  public function create(Request $request) {
    $data = $request->validate([
      'name' => 'required',
      'description' => 'required',
      'model' => 'required',
      'upc' => 'required',
      'ean' => 'required',
      'price' => 'required',
      'sku' => 'required',
    ]);

    $data = $request->all();
    $product = new Products();

    $product->name = $data['name'];
    $product->description = $data['description'];
    $product->model = $data['model'];
    $product->upc = $data['upc'];
    $product->ean = $data['ean'];
    $product->price = $data['price'];
    $product->sku = $data['sku'];
    $product->length = $data['length'];
    $product->height = $data['height'];
    $product->width = $data['width'];
    $product->category = $data['category'];
    $product->manufacturer = $data['manufacturer'];
    $product->image = $data['image'];
    $product->met_tag_title = $data['met_tag_title'];
    $product->meta_tag_keywords = $data['meta_tag_keywords'];
    $product->meta_tag_description = $data['meta_tag_description'];

    if ($manObj->save()) {
			$request->session()->flash('success', 'Manufacturer has been added!');
		} else {
			$request->session()->flash('error', 'Manufacturer could not add!');
		}

    return redirect('/products');
  }

  public function ajax_request(Request $request) {
    $rq = $request->all();

    if($rq['type'] == 'manAuto') {
      return Manufacturers::all();
    } elseif($rq['type'] == 'catAuto') {
      return Catagories::all();
    }
  }
}
