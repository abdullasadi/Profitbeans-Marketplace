<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
  public $timestamps = false;
  protected $fillable = [
    'name', 'description', 'model', 'upc', 'ean', 'price', 'sku', 'length', 'height', 'width', 'category',
    'manufacturer', 'image', 'met_tag_title', 'meta_tag_keywords', 'meta_tag_description'
  ];
}
