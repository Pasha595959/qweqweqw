<?php

/* https://api.telegram.org/bot5431050005:AAHfeEfgyQ1djNSoHTcYnpz5ZDy5yKqvI1w/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['phone'];
$token = "5431050005:AAHfeEfgyQ1djNSoHTcYnpz5ZDy5yKqvI1w";
$chat_id = "-824481777";
$arr = array(
  'Номер: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index2.html');
} else {
  echo "Error";
}
?>