<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model {
	public $timestamps = false;
	protected $fillable = [
		'name', 'sort_order', 'image'
	];
}
