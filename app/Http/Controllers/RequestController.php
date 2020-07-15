<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'Комментарий: ' => $request->comment,
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
}
