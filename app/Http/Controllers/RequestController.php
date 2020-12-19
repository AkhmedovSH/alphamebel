<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Product;
use Carbon\Carbon;
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
        $weRecallText = 'Спасибо, наши менеджеры свяжутся с вами.';
				return view('paymentSuccess', compact('weRecallText'));
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

				if($request->section == 'question')
        {
            $arr = [
                'Раздел: ' => 'Задать вопрос',
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
        $weRecallText = 'Спасибо, наши менеджеры свяжутся с вами.';
				return view('paymentSuccess', compact('weRecallText'));
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
        $weRecallText = 'Спасибо, наши менеджеры свяжутся с вами.';
				return view('paymentSuccess', compact('weRecallText'));
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
            $date = Carbon::now();
						$formatedDate = $date->format('d-m-Y H:i');

						$arr = [
							'Номер заказа:' => '№ ' . $order->id,
							'Дата:' => $formatedDate,
							'Раздел: ' => 'Корзина',
							'Рассрочка: ' => $order->installment == 1 ? 'Да' : 'Нет',
							'Имя: ' => $order->name,
							'Номер телефона: ' => $phone,
							'Комментарий: ' => $order->comment,
							'Тип оплаты: ' => $order->payment_type,
							'Статус оплаты: ' => "Оплата наличкой",
						];
            $txt = "";
            foreach ($arr as $key => $value) {
							$txt .= "<b>" . $key . "</b> " . $value . "\n";
						};
						$totalAmount = 0;
            foreach (Cart::content() as $key => $value) {
							$totalAmount += $value->model->price * $value->qty;
							$txt .= "<b>" .  $value->name . "</b> " . "<b>" . "Код товара: " .$value->model->code . "</b> "
							. number_format($value->model->price, 0,","," ") . ' сум | ' . $value->qty . ' шт' . "\n";
						}
						$txt .= "<b>" . "Общая сумма: " . "</b> " . number_format($totalAmount, 0,","," ") . " сум";
						
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
            $weRecallText = 'Спасибо за покупку! Наши менеджеры свяжутся с вами.';
            return view('paymentSuccess', compact('weRecallText'));
        }
    }

    public function paymentSuccess($phone) {
			$order = Order::where('phone', $phone)->latest('created_at')->first();
			if(isset($order)) {
				$orders = Product::whereIn('id', json_decode($order->product_ids))->get();
			}
			
			if(isset($order)) {
					$order->status = 1;
					$order->save();
					$date = Carbon::now();
					$formatedDate = $date->format('d-m-Y H:i');

					$arr = [
							'Номер заказа:' => '№ ' . $order->id,
							'Дата:' => $formatedDate,
							'Раздел: ' => 'Корзина',
							'Рассрочка: ' => $order->installment == 1 ? 'Да' : 'Нет',
							'Имя: ' => $order->name,
							'Номер телефона: ' => $phone,
							'Комментарий: ' => $order->comment,
							'Тип оплаты: ' => $order->payment_type,
							'Статус оплаты: ' => $order->status == 1 ? "Успешно" : "Не оплачено",
					];
					$txt = "";
					foreach ($arr as $key => $value) {
						$txt .= "<b>" . $key . "</b> " . $value . "\n";
					};
					$totalAmount = 0;
					foreach ($orders as $key => $value) {
						$totalAmount += $value->price;
						$txt .= "<b>" .  $value->title . "</b> " . "<b>" . "Код товара: " .$value->code . "</b> " . number_format($value->price, 0,","," ") . ' сум | ' . 1 . ' шт' . "\n";
					};
					$txt .= "<b>" . "Общая сумма: " . "</b> " . number_format($totalAmount, 0,","," ") . " сум";
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
			$weRecallText = 'Спасибо за покупку! Ваша оплата принята. Код подтверждения №' . $order->id . '. Наши менеджеры свяжутся с вами.';
			Cart::destroy();
			return view('paymentSuccess', compact('weRecallText'));
       
    }
}
