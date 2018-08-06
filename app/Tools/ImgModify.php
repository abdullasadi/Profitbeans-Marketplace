<?php
namespace App\Tools;

use Image;
use Config;

class ImgModify{


public function resize($filename, $width, $height) {
  if (!is_file(Config::get('app.image_path') . $filename)) {
    $filename = 'default.png';
  }
  $extension = pathinfo($filename, PATHINFO_EXTENSION);

  $old_image = $filename;
  $new_image = Config::get('iamge_path').'cache/' . substr($filename, 0, strrpos($filename, '.')) . '-' . $width . 'x' . $height . '.' . $extension;

  if(!is_file(Config::get('app.image_path') . $new_image)){
    $image_resize = Image::make(Config::get('app.image_path') . $old_image);
    $image_resize->resize($width, $height);
    $image_resize->save(Config::get('app.image_path') . $new_image);
    return Config::get('app.image_path').$new_image;
  }else{
    return Config::get('app.image_path').$new_image;
  }

}

public function someFunction()
{
     echo "Hello world and foo bar and stuff";
}













}
