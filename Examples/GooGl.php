<?php

include "ASA.php";

$RamiX = new ASA('TOKEN_HERE');

$RamiP = new ASA_plugins();

$RamiP->github('sebastianwyder','googl-php','Googl.class.php');

$googl = new Googl('API_KEY_GOOGLE');

//https://developers.google.com/url-shortener/v1/getting_started

$update = json_decode(file_get_contents("php://input"));

@$message = $update->message;

@$message_id = $message->message_id;

@$chat_id = $update->message->chat->id;

@$chat_type = $update->message->chat->type;

@$from_id = $update->message->from->id;

@$text = $message->text;

@$data = $update->callback_query->data;


if($text == "/start"){

$RamiX->SetChatID($chat_id);

$RamiX->SetData("
Hello! Send Link For Short it
مرحبا 😝
أرسل الرابط لاختصاره
");

$RamiX->SendMessage();

}else{

$RamiX->SetChatID($chat_id);

$short = $googl->shorten($text);

if($short){

$RamiX->SetData("
✅ تم اختصار رابطك بنجاح :
$short
");

}else{

$RamiX->SetData("
❌ عفوا حدثت مشكلة أثناء اختصار رابطك
في بداية الرابط http:// أو https:// الرجاء التأكد من وجود
");

}

$RamiX->SendMessage();

}


?>