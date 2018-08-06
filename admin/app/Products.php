<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
  protected $fillable = [
    'bean', 'name', 'model', 'sku', 'price', 'cost_price', 'stock_status', 'manufacturer', 'category', 'slug',
    'upc', 'ean', 'description', 'image', 'status', 'seller_id', 'option_id', 'attribute_id',
    'on_google', 'meta_tag_title', 'meta_tag_keywords', 'meta_tag_description', 'tax_class',
    'length', 'height', 'width'
  ];
}
