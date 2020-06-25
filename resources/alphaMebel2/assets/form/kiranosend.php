<?php

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
// $webPage = $_POST['web_page'];
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
$text = $_POST['user_text'];
$connection = $_POST['user_connection'];


$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ


$chat_id = "-426892560"; //МЕНЯЕТСЯ!!!


$arr = array(
  'Новая заявка с сайта: ' => 'Shatura.uz',
  'Раздел: ' => 'Виртуальный дизайнер',
  'Имя клиента: ' => $name,
  'Телефон: ' => $phone,
  'Удобно связаться по:' => $connection,
  'Пожелания:' => $text
);

//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// После отправки
if ($sendToTelegram) {
  header('Location: success.html');
} else {
  header('Location: error_form.html');
}
?>