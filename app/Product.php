<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{


    public function removeImage(){
        if ($this->image != null){
            Storage::delete('uploads/slider/'. $this->image);
        }
    }

    function uploadImage($image){
        if ($image == null) { return; }
        $this->removeImage();
        $filename = rand(1000, 1000000000). '.' . $image->extension();

        $image->move('uploads/slider/', $filename);
        $this->image = $filename;
        $this->save();
    }
    
    public function uploadMultipleImages($images) {
        if ($images == null) { return; }
        $names = array();
        $incI = 0;
        foreach($images as $image)
        {
            $filename = str_random(10). '.' . $image->extension();
            $image->storeAs('uploads/products/', $filename);
            //array_push($names, $filename);  
            $names[$incI]['image'] = $filename;
            $incI++;
            
        }
        $this->images = json_encode($names);
        $this->save();
    }
}
