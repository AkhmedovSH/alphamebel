<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        return view('basket');
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $part_number = $request->part_number;
        $price = $request->price;
        $sale = $request->sale;
       
        if($price == null){ $price = 0; }
        if($sale != 0){ $price = $price - ($price * $sale / 100); }
        Cart::add($id, $title, 1, $price)->associate('App\Product');
        return view('basket');
    }


    public function update(Request $request)
    {
        $cart = Cart::update($request->prodid, $request->quantity);
        //session()->flash('success_message', 'Quantity was updated succesfully!');
        return response()->json(['success' => 'aaa']);
    }

    public function destroy($id)
    {
            Cart::remove($id);
            return back()->with('success_message', 'Item has been removed');
    }

    public function orderSendTelegram(Request $request)
    {
        dd( $request->all() );
        /* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
        где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
        $token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";
        $chat_id = "-426892560";
       
        
        foreach ($orders as $order) {
            $arr = [
                'Фойдаланувчи: ' => 'test',
                'Заказ раками: ' => 'test',
                'Номи: ' => 'test',
                'Манзил: ' => 'test',
            ];
            $txt = "";
            foreach ($arr as $key => $value) {
                $txt .= "<b>" . $key . "</b> " . $value . "%0A";
            };
           
            fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
        };
    }
}
