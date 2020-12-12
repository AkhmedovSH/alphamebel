<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
		protected $fillable = ['phone', 'amount', 'payment_type', 'name', 'email', 'address', 'comment', 'status', 'product_ids', 'installment'];
    public static function add($fields, $product_ids)
    {
        $data = new static;
        $data->fill($fields);

        if(isset($product_ids)){
            $data->product_ids = json_encode($product_ids);
        }

        $data->save();
        return $data;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
