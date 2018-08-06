<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Catagories;
use App\Manufacturers;

class ProductsController extends Controller {
  public function index() {
    $products = Products::all();
		return view('products', ['products' => $products]);
	}
  public function addProduct() {
    return view('add-product');
  }
  public function create(Request $request) {
    $request->all();
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

    $product->bean = 'text';
    $product->name = $data['name'] ? $data['name'] : '';
    $product->model = $data['model'] ? $data['model'] : '';
    $product->sku = $data['sku'] ? $data['sku'] : '';
    $product->price = $data['price'] ? $data['price'] : '';
    $product->cost_price = $data['cost_price'] ? $data['cost_price'] : '';
    $product->stock_status = $data['stock_status'] ? $data['stock_status'] : '';
    $product->manufacturer = $data['manufacturer'] ? $data['manufacturer'] : '';
    $product->category = $data['category'] ? $data['category'] : '';
    $product->slug = isset($data['slug']) ? $data['slug'] : '';
    $product->upc = $data['upc'] ? $data['upc'] : '';
    $product->ean = $data['ean'] ? $data['ean'] : '';
    $product->description = $data['description'] ? $data['description'] : '';
    $product->image = $data['image'] ? $data['image'] : '';
    $product->status = isset($data['status']) ? $data['status'] : '';
    $product->seller_id = isset($data['seller_id']) ? $data['seller_id'] : '';
    $product->option_id = isset($data['option_id']) ? $data['option_id'] : '';
    $product->attribute_id = isset($data['attribute_id']) ? $data['attribute_id'] : '';
    $product->on_google = isset($data['on_google']) ? $data['on_google'] : '';
    $product->meta_tag_title = isset($data['meta_tag_title']) ? $data['meta_tag_title'] : '';
    $product->meta_tag_keywords = isset($data['meta_tag_keywords']) ? $data['meta_tag_keywords'] : '';
    $product->meta_tag_description = isset($data['meta_tag_description']) ? $data['meta_tag_description'] : '';
    $product->tax_class = isset($data['tax_class']) ? $data['tax_class'] : '';
    $product->length = isset($data['length']) ? $data['length'] : '';
    $product->height = isset($data['height']) ? $data['height'] : '';
    $product->width = isset($data['width']) ? $data['width'] : '';

    if ($product->save()) {
			$request->session()->flash('success', 'Product has been added!');
		} else {
			$request->session()->flash('error', 'Product could not add!');
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
