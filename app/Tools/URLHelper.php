<?php
// app/Tools/SomeExampleClass.php
namespace App\Tools;

class URLHelper
{
    protected $arrays;

    public function urlClean($url)
    {
      $this->arrays = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $url);
  		$this->arrays= strtolower(trim($this->arrays, '-'));
  		$this->arrays = preg_replace("/[\/_|+ -]+/", '-', $this->arrays);
  		return $this->arrays;
    }
}
