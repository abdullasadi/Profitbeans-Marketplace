<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Catagories;
use App\Manufacturers;
use Config;
use Validator;
use URLHelper;

class ProductsController extends Controller {
  public function index() {
    $products = Products::all();

		return view('products', [
      'products' => $products,
      'title' => 'Products'
    ]);
	}
  public function addProduct() {
    $categories = Catagories::all();
    $manufacturers = Manufacturers::all();

    return view('add-product', [
      'categories' => $categories,
      'manufacturers' => $manufacturers,
      'title' => 'Add Product'
    ]);
  }
  public function create(Request $request) {



    $data = $request->validate([
      'name' => 'required',
      'model' => 'required',
      'price' => 'required',
      'category' => 'required',
      'manufacturer' => 'required',
      'meta_tag_title' => 'required'
    ]);
    $data = $request->all();


    if ($request->hasFile('image')) {
      $imageArr = $request->file('image');
      $imgObj = array();
      foreach($imageArr as $image){
        $name = time().'-'.uniqid(10).'-'.$image->getClientOriginalName();
        $destinationPath = Config::get('app.image_path').'catalog/';
        $image->move($destinationPath, $name);
        $img = 'catalog/'.$name;
        array_push($imgObj, $img);
      }
      $imgObj = json_encode($imgObj);
    }else{
      $imgObj = 'default';
    }

    if(isset($data['slug'])){
      $slug = URLHelper::urlClean($data['slug']);
    }else{
      $slug = URLHelper::urlClean($data['name']);
    }


    $product = new Products();
    $product->bean = 'PB'.strtoupper(uniqid());
    $product->name = $data['name'] ? $data['name'] : '';
    $product->model = $data['model'] ? $data['model'] : '';
    $product->sku = $data['sku'] ? $data['sku'] : $data['model'];
    $product->price = $data['price'] ? $data['price'] : '';
    $product->cost_price = $data['cost_price'] ? $data['cost_price'] : '00';
    $product->stock_status = $data['stock_status'] ? $data['stock_status'] : '';
    $product->manufacturer = $data['manufacturer'] ? $data['manufacturer'] : '';
    $product->category = $data['category'] ? $data['category'] : '';
    $product->slug = $slug;
    $product->upc = $data['upc'] ? $data['upc'] : '';
    $product->ean = $data['ean'] ? $data['ean'] : '';
    $product->description = htmlspecialchars($data['description']);
    $product->image = $imgObj;
    $product->status = isset($data['status']) ? $data['status'] : '0';
    $product->seller_id = isset($data['seller_id']) ? $data['seller_id'] : '0';
    $product->option_id = isset($data['option_id']) ? $data['option_id'] : '';
    $product->attribute_id = isset($data['attribute_id']) ? $data['attribute_id'] : '';
    $product->on_google = isset($data['on_google']) ? $data['on_google'] : '0';
    $product->meta_tag_title = isset($data['meta_tag_title']) ? $data['meta_tag_title'] : '';
    $product->meta_tag_keywords = isset($data['meta_tag_keywords']) ? $data['meta_tag_keywords'] : '';
    $product->meta_tag_description = isset($data['meta_tag_description']) ? $data['meta_tag_description'] : '';
    $product->tax_class = isset($data['tax_class']) ? $data['tax_class'] : '0';
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
    return null;
  }
}
