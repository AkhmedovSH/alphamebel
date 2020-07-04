<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{

    protected $fillable = ['title', 'description', 'attribute_ids', 'category_id', 'price', 'note', 'code', 'sale'];

    protected $casts = [
        'attribute_ids' => 'array',
        'images' => 'array',
    ];

    public static function add($fields)
    {
        
        $data = new static;
        
        $data->fill($fields);
        $data->attribute_ids = $fields['attribute_ids'];
        $data->save();
        
        return $data;
    }

    public function edit($fields)
    {
        //dd($fields);
        $this->fill($fields);
        $this->save();
    }

    public function remove() {
       
        $this->removeImage();
        $this->removeSliderImages();
        $this->delete();
    }

    public function getImage(){
        if ($this->image == null){
            return '/img/no-image.png';
        }
        return '/uploads/products/'. $this->image;
    }

    public function removeImage(){
        if ($this->image != null) {
            unlink('uploads/products/'. $this->image);
        }
    }

    public function removeSliderImages(){
        if ($this->images != null) {
            $images = json_decode($this->images, true);
            foreach($images as $item) {
                unlink('uploads/products/'. $item['image']);
            }
        }
    }

    function uploadImage($image){
        if ($image == null) { return; }
        $this->removeImage();
        $filename = rand(1000, 1000000000). '.' . $image->extension();

        $image->move('uploads/products/', $filename);
        $this->image = $filename;
        $this->save();
    }
    
    public function uploadMultipleImages($images) {
        if ($images == null) { return; }
        $names = array();
        $incI = 0;
        foreach($images as $image)
        {
            $filename = rand(1000, 1000000000). '.' . $image->extension();
            $image->move('uploads/products/', $filename);
            //array_push($names, $filename);  
            $names[$incI]['image'] = $filename;
            $incI++;
            
        }
        $this->images = json_encode($names);
        $this->save();
    }
}
