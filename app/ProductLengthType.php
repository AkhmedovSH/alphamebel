<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLengthType extends Model
{
    protected $fillable = ['title'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public static function add($fields)
    {
        $data = new static;
        $data->fill($fields);
        $data->save();

        return $data;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
