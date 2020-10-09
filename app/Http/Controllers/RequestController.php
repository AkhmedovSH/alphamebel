<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Product;
use GuzzleHttp\Client;
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
        if($request->section == 'submit_your_application')
        {
            $arr = [
                'Раздел: ' => 'Оставить заявку',
                'Имя: ' => $request->name,
                'Номер телефона: ' => $request->phone,
                'Комментарий: ' => $request->comment,
            ];
        }
        if($request->section == 'dealers') {
            $arr = [
                'Раздел: ' => 'Хочу присоединиться',
                'Имя: ' => $request->name,
								'Номер телефона: ' => $request->phone,
								'Комментарий: ' => $request->comment,
            ];
				}
				
				if($request->section == 'suppliers') {
					$arr = [
							'Раздел: ' => 'Стать партнёром',
							'Имя: ' => $request->name,
							'Номер телефона: ' => $request->phone,
							'Комментарий: ' => $request->comment,
					];
			}
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
        
        if($request->payment_type == 'click') {
            $url = 'https://my.click.uz/services/pay?service_id='
            . $request->service_id . '&merchant_id=' . $request->merchant_id . 
            '&amount=' . $request->amount . '&transaction_param=' . $request->phone . '&return_url=http://shatura.uz/payment-success/' . $request->phone;

            return redirect($url);
				}
				
				if($request->payment_type == 'payme') {
					
					if(strlen($request->phone) <= 13){
						$user = User::where('name', $request->phone)->first();
						if($user == null) {
							$new_user = User::create([
								'name' => $request->phone,
							]);
							$new_user->save();
						} else {
							$new_user = User::where('name', $request->phone)->first();
						}
					}
					
					$url = 'https://checkout.paycom.uz/' . base64_encode('m=5f7599ce2a1efb16263bff66;ac.user_id=' . $new_user->id .';a=' . $request->amount * 100 . ';c=http://shatura.uz/payment-success/' . $request->phone);
					return redirect($url);
				}

        if($request->payment_type == 'cash') {
            $order = Order::where('phone', $request->phone)->first();
            $orders = Product::whereIn('id', json_decode($order->product_ids))->get();

            $order->status = 1;
            $order->save();
            $arr = [
                'Раздел: ' => 'Корзина',
                'Имя: ' => $order->name,
                'Номер телефона: ' => $request->phone,
                'Комментарий: ' => $order->comment,
            ];
            $txt = "";
            foreach ($arr as $key => $value) {
                $txt .= "<b>" . $key . "</b> " . $value . "\n";
            };
            foreach (Cart::content() as $key => $value) {
                $txt .= "<b>" .  $value->name . "</b> " . $value->model->price . 'сум | ' . $value->qty . ' шт' . "\n";
            }
    
            $website="https://api.telegram.org/bot".$this->token;
            $chatId = $this->chat_id;
            $params=[
                'chat_id'=>$chatId, 
                'text'=> $txt,
                'parse_mode' => 'html'
            ];
            $ch = curl_init($website . '/sendMessage');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($ch);
            curl_close($ch);
            $weRecallText = 'Ожидайте звонка наши менеджеры свяжуться с вами.';
            return view('paymentSuccess', compact('weRecallText'));
        }
        
       
    }

    public function paymentSuccess($phone) {
        $order = Order::where('phone', $phone)->first();
        $orders = Order::whereIn('product_ids', json_decode($order->product_ids))->get();
        if(isset($order)) {
            $order->status = 1;
            $order->save();
            $arr = [
                'Раздел: ' => 'Корзина',
                'Имя: ' => $order->name,
                'Номер телефона: ' => $request->phone,
                'Комментарий: ' => $order->comment,
            ];
            $txt = "";
            foreach ($arr as $key => $value) {
                $txt .= "<b>" . $key . "</br> " . $value . "\n";
            };
            foreach ($orders as $key => $value) {
                $txt .= "<b>" . $key + 1 . "</b> " . $value->title . "\n";
                $txt .= "<b>" .  $value->title . "</b> " . $value->price . 'сум' . "\n";
            };

            $website="https://api.telegram.org/bot".$this->token;
            $chatId = $this->chat_id;
            $params=[
                'chat_id'=>$chatId, 
                'text'=> $txt,
                'parse_mode' => 'html'
            ];
            $ch = curl_init($website . '/sendMessage');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($ch);
            curl_close($ch);
        }
        $weRecallText = '«Спасибо за заказ! Наши менеджеры свяжутся с вами»';
        return view('paymentSuccess', compact('weRecallText'));
       
    }
}
