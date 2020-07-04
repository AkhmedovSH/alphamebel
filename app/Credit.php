<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{

    protected $fillable = ['credit', 'month'];

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();

        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
