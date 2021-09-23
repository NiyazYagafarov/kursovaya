<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['mail']) and !empty($_POST['number']) 
   and !empty($_POST['address']) and !empty($_POST['sox'])){
      $name = trim(strip_tags($_POST['name']));
      $mail = trim(strip_tags($_POST['mail']));
      $phone = trim(strip_tags($_POST['number']));
      $address = trim(strip_tags($_POST['address']));
      $sox = trim(strip_tags($_POST['sox']));
 
      mail('chotkie.nosochki@gmail.com', 'Письмо с адрес_вашего_сайта', 
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его адрес: '.$address. '<br />Его заказ: '.$sox,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>