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


    public function parent()    {
        return $this->belongsTo('App\Catagories', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Catagories', 'parent_id');
    }
}
