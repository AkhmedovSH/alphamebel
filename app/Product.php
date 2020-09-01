<?php

namespace App;

use App\Credit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{

    protected $fillable = [
    'title', 'description', 'attribute_ids', 'isCollection', 'collection_product_ids',
    'category_id', 'price', 'note', 'code', 'sale', 'width', 'height', 'length', 'length_type_id'
    ];

    protected $casts = [
        'attribute_ids' => 'array',
        'collection_product_ids' => 'array',
        'images' => 'array',
        'two_images' => 'array',
    ];

    public static function add($fields){
        
        $data = new static;
        
        $data->fill($fields);

        if(isset($fields['attribute_ids'])) {
            $data->attribute_ids = $fields['attribute_ids'];
        }else{
            $data->attribute_ids = null;
        }
       
        if(isset($fields['collection_product_ids'])) {
            $data->isCollection = 1;
            $data->collection_product_ids = $fields['collection_product_ids'];
        }else{
            $data->isCollection = 0;
            $data->collection_product_ids = null;
        }

        if($fields['sale'] == null){
            $data->sale = 0;
        }
        
        $data->save();
        
        return $data;
    }

    public function edit($fields)
    {
        $this->fill($fields);

        if($fields['sale'] == null){
            $this->sale = 0;
        }

        if(isset($fields['attribute_ids'])) {
            $this->attribute_ids = $fields['attribute_ids'];
        }else {
            $this->attribute_ids = null;
        }

        if(isset($fields['collection_product_ids'])) {
            $this->isCollection = 1;
            $this->collection_product_ids = $fields['collection_product_ids'];
        }else{
            $this->isCollection = 0;
            $this->collection_product_ids = null;
        }
       
        $this->save();
    }

    public function remove() {
       
        $this->removeImage();
        $this->removeSliderImages();
        $this->removeTwoImages();
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

    public function removeTwoImages(){
        if ($this->two_images != null) {
            $images = json_decode($this->two_images, true);
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
            $names[$incI]['image'] = $filename;
            $incI++;
            
        }
        $this->images = json_encode($names);
        $this->save();
    }

    public function uploadTwoImages($images) {
        if ($images == null) { return; }
        $names = array();
        $incI = 0;
        foreach($images as $image)
        {
            $filename = rand(1000, 1000000000). 123123 . '.' . $image->extension();
            $image->move('uploads/products/', $filename);
            $names[$incI]['image'] = $filename;
            $incI++;
            
        }
        $this->two_images = json_encode($names);
        $this->save();
    }

    public function calculate() {
        $credit = Credit::where('id', 1)->first();
        $newPrice = 0;
        if($this->sale != 0) {
            $sale = ((($this->price / 100) * $this->sale) / 100) * $credit->credit;
            $productPrice = ($this->price / 100) * $this->sale;
            $newPrice = ($productPrice * ($sale/$productPrice)) / $credit->month;
            
            return number_format($newPrice, 2);
        } else {
            $sale = ($this->price / 100) * $credit->credit;
            
            $newPrice = ($this->price * ($sale/$this->price)) / $credit->month;
            return number_format($newPrice, 2);
        }
    }
}
