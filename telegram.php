<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "5392125815:AAEHpKqLglbFgYbo";
$txt="";
$chat_id = "-";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

$txt = json_encode($txt);
//$data = json_encode($data);
foreach($arr as $key => $value) {
  $txt .= "\n".$key."\n ".$value."\n";
  
};

$txt = rawurlencode($txt);  // To encode cyrillic entities
//$sendToTelegram='https://api.telegram.org/bot' . $token . '/sendMessage?' . http_build_query($parameters);
//$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$sendToTelegram = fopen("http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
 // header('Location:thank-you.html');
 header('Location:thank-you.html');
 //$result = file_get_contents('http://example.com/submit.php', false, $context);

} else {
  echo "Error";
}
?>
