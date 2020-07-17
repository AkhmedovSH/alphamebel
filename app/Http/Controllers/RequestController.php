<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class RequestController extends Controller
{
    public $token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";
    public $chat_id = "-426892560";

    public function recall(Request $request)
    {
        $arr = [
            'Раздел: ' => 'Перезвонить клиенту',
            'Номер телефона: ' => $request->phone,
        ];
        $txt = "";
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
       
        fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
        return redirect()->back();
    }
    
    public function sendRequest(Request $request)
    {
        $arr = [
            'Раздел: ' => 'Оставить заявку',
            'Имя: ' => $request->name,
            'Номер телефона: ' => $request->phone,
            'Комментарий: ' => $request->comment,
        ];
        $txt = "";
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
       
        fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
        return redirect()->back();
    }

    public function virtualDesign(Request $request)
    {
        $arr = [
            'Раздел: ' => 'Виртуальный дизайн',
            'Имя: ' => $request->name,
            'Номер телефона: ' => $request->phone,
            'Записка: ' => $request->comment,
            'Свзяь: ' => $request->user_connection,
        ];
        $txt = "";
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
       
        fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
        return redirect()->back();
    }

    public function order(Request $request)
    {
        $arr = [
            'Раздел: ' => 'Оставить заявку',
            'Имя: ' => $request->name,
            'Номер телефона: ' => $request->phone,
            'Комментарий: ' => $request->comment,
        ];
        $txt = "";
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        };
       
        fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
        return redirect()->back();
    }

    public function makePayment(Request $request) {
        $arr = [];
        foreach (Cart::content() as $key => $value) {
            array_push($arr, $value->id);            
        }
        $order = Order::add($request->all(), $arr);
        
        if($request->payment_type == 'click' || $request->payment_type == 'payme') {
            $url = 'https://my.click.uz/services/pay?service_id='
            . $request->service_id . '&merchant_id=' . $request->merchant_id . 
            '&amount=' . $request->amount . '&transaction_param=' . $request->phone . '&return_url=http://shatura.uz/payment-success/' . $request->phone;

            return redirect($url);
        }

        if($request->payment_type == 'cash') {
            $order = Order::where('phone', $request->phone)->first();
            //$orders = Product::whereIn('id', json_decode($order->product_ids))->get();
            $order->status = 1;
            $order->save();
    
            // $arr = [
            //     'Раздел: ' => 'Корзина',
            //     'Имя: ' => $order->name,
            //     'Номер телефона: ' => $request->phone,
            //     'Комментарий: ' => $order->phone,
            // ];
            // $txt = "";
            // foreach ($arr as $key => $value) {
            //     $txt .= "<b>" . $key . "</b> " . $value . "%0A";
            // };
            // foreach ($orders as $key => $value) {
            //     $txt .= "<b>" . $key  . "</b> " . $value->title . "%0A";
            // };

            // fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
            $weRecallText = 'Ожидайте звонка наши менеджеры свяжуться с вами.';
            return view('paymentSuccess', compact('weRecallText'));
        }
        
       
    }

    public function paymentSuccess($phone) {
        $order = Order::where('phone', $phone)->first();
        //$orders = Order::whereIn('product_ids', json_decode($order->product_ids))->get();
        $order->status = 1;
        $order->save();

        // $arr = [
        //     'Раздел: ' => 'Корзина',
        //     'Имя: ' => $order->name,
        //     'Номер телефона: ' => $request->phone,
        //     'Комментарий: ' => $order->phone,
        // ];
        // $txt = "";
        // foreach ($arr as $key => $value) {
        //     $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        // };
        // foreach ($orders as $key => $value) {
        //     $txt .= "<b>" . $key + 1 . "</b> " . $value->title . "%0A";
        // };
       
        // fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}", "r");
        return view('paymentSuccess');
       
    }
}
