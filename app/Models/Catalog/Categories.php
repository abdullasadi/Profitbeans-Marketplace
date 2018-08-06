<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {
    public function parent() {
      return $this->belongsTo('App\Models\Catalog\Categories', 'parent_id');
    }
    public function child() {
      return $this->hasMany('App\Models\Catalog\Categories', 'parent_id');
    }
}
