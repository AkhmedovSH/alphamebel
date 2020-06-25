<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content', 'date', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function removeImage()
    {
        if ($this->image != null) {
            Storage::delete('uploads/posts/' . $this->image);
        }
    }

    function uploadImage($image)
    {
        if ($image == null) {
            return;
        }
        $this->removeImage();
        $filename = $this->slug . '.' . $image->extension();

        $image->move('uploads/posts/', $filename);
        $this->image = $filename;
        $this->save();
    }


    public function getImage()
    {
        if ($this->image == null) {
            return '/images/no-image.png';
        }
        return '/uploads/posts/' . $this->image;
    }

    public function setCategory($id)
    {
        if ($id == null) {
            return;
        }
        $this->category_id = $id;
        $this->save();
    }

    public function getCategoryTitle()
    {
        return ($this->category != null)
            ? $this->category['title']
            : 'Нет категории';
    }

    public function getDate()
    {
        return Carbon::createFromFormat('d/m/y', $this->date)->format('F d, Y');
    }
}
