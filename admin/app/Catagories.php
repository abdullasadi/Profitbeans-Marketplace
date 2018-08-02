<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagories extends Model {
    public $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
      'name', 'description', 'parent_id', 'seo_url', 'meta_tag_title', 'meta_tag_keywords', 'meta_tag_description',
      'menu_column', 'on_menu', 'status', 'sort_order'
    ];
}
