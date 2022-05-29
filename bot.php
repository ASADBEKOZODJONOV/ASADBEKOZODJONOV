<?php
$tek = "😁 Kod ishladi tog'o @veb_code";
Echo $tek;
ob_start();
$token = '5572909789:AAE_8sn5wttIwrAaeFmdIxgFwqbRT_uP9jo';
   

$admin = '1989157159'; // Admin ID
  $botnomi="☃️Bot: @$botname";
  $botname="@Profile_images_01robot";//bot nomi
$kanalimz ="@Profile_images_01"; //kanal useri
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01 va @php_bot_kodlari bundan ham zor kodlar bor )! manbaa qolsin!

function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}///-----Dasturchi : @veb_code @update_off ---kanal Profile_images_01)! manbaa qolsin!


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$data = $callback->data;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$username = $message->from->username;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$photo = $message->photo;
$name = $message->from->first_name;
$userini = $message->from->username;
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01  )! manbaa qolsin!
//new
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$fid2 = $update->callback_query->message->from->id;
$call = $update->callback_query;
$qid = $call->id;
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01 )! manbaa qolsin!



$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋 Ramazon"],['text'=>"🕋 Juma"]],
[['text'=>"🎁 Tug'ulgan kun"],['text'=>"🎄Yangi Yil"]], 
[['text'=>"🗞 News"]],
]
]);

$ort = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❌ Orqaga"]],
]
]);







$ret1 = bot("getChatMember",[
         "chat_id"=>"@Profile_images_01", // Glavniyga_kartinkalar_rasmlar
         "user_id"=>$uid
         ]);
$ret2 = bot("getChatMember",[
         "chat_id"=>"@A_Ozorjonov", // Botlar_Robotlari
         "user_id"=>$uid
         ]);
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member")){}else{
  $toza = bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"⭕ | <b><i>Quyidagi kanalga obuna bo'ling!</i>\n \n<u>✅ | A'zo bo'lib qayta /start bosing! \n\n📄 | Botni keyin to'liq ishlatishingiz mumkin</u></b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🔵 | A'zo bo'lish [1]","url"=>"https://t.me/Profile_images_01"],],
]
]),
]); ///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

return false;
}

///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01 )! manbaa qolsin!


$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
///$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
mkdir("Bot");


if($text=="❌ Orqaga"){
file_put_contents("Bot/2.step","");
$toza = bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🏡<i>Siz Bosh menyudasiz.</i>",
'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu
]);
unlink("Bot/2.step");
}






if($text == "/start"){
$toza = bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👋 | Assalamu aleykum $name\n✅ | Men orqali ismingiz ajoyib rasmga joylashingiz mumkin!,\n🎁 | Buning uchun pastdagi bo‘limlarni birini tanlang👇!",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]); 
}







if($text=="🎄Yangi Yil"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $mmtxt="
☃️Yangi yilga Bayramiga

 🎄$b kun 
 🎊$b2 soat
 🎁 $b3 minut
 ❄️$b4 sekund qoldi!

🎅🏽Hurmatli '$name' 
🎉Kirib kelayotgan
🎁Yangi yil bilan! ";
$toza = bot('sendmessage',[
    'chat_id'=>$chat_id,
    'user_id'=>$cid,
    'reply_to_message_id'=>$mid,
    'text'=>$mmtxt,
    'parse_mode'=>'html',
'reply_markup'=>$menu,
  ]);
}
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!





$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  

if($text == "🗞 News"){
$toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
🎩Eng So'ngi va Qaynoq 🗞️Yangiliklar

[$line]($link)

📚To'liq O'qish Uchun Bosing!⤴️",
'parse_mode'=>'Markdown',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu, 
]);
}





////ramazon
if($text == "🕋 Ramazon"){
 $toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🔸 | Ism yozing

✅ | Faqat lotin harflarda boʻlsin!
",
'reply_markup'=>$ort,
    ]);
    file_put_contents("Bot/2.step","ser2");
}
if($step2=="ser2"){ 
if(mb_stripos($text,"🕋")!==false or mb_stripos($text,"🎁")!==false or mb_stripos($text,"📚")!==false or mb_stripos($text,"🎄")!==false or mb_stripos($text,"🗞")!==false or mb_stripos($text,"/")!==false or mb_stripos($text,"🔃")!==false or mb_stripos($text,"❌")!==false){
}else{
file_put_contents("Bot/2.step","");
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"✅ |  Tayorlanmoqda....",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 $toza = bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=1&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=2&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=3&text=$text"], 
["type"=>"photo", 
"media" => "https://u4680.xvest2.ru/Apilarimga/ramazon.php?api=3&text=$text"], 
["type"=>"photo", 
"media" => "https://user31781.xost-uz.ru/UzOwn/Ramazon_API/API_5/index.php?text=$text"], 
]), 
]);
$toza = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>🔰 | Bosh menyu </i>",
'parse_mode'=>html,
'reply_markup'=>$menu,
]);
}
}

///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01 )! manbaa qolsin!

///juma

if($text == "🕋 Juma" or $data == "3"){
 $toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🔸 | Ism yozing

✅ | Faqat lotin harflarda boʻlsin!
",
'reply_markup'=>$ort,
    ]);
    file_put_contents("Bot/2.step","ser3");
}
if($step2=="ser3"){ 
if(mb_stripos($text,"🕋")!==false or mb_stripos($text,"🎁")!==false or mb_stripos($text,"📚")!==false or mb_stripos($text,"🎄")!==false or mb_stripos($text,"🗞")!==false or mb_stripos($text,"/")!==false or mb_stripos($text,"🔃")!==false or mb_stripos($text,"❌")!==false){
}else{
file_put_contents("Bot/2.step","");
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"✅ |  Tayorlanmoqda....",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 $toza = bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api3/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api3/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api2/index.php?text=$text"], 
["type"=>"photo", 
"media" => "https://coderoff.myxvest.ru/Apilarim1/api/index.php?text=$text"], 
]), 
]);
$toza = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>🔰 | Bosh menyu </i>",
'parse_mode'=>html,
'reply_markup'=>$menu,
]);
}
}

///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

///tugulgan kun

if($text == "🎁 Tug'ulgan kun" or $data == "5"){
 $toza = bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🔸 | Ism yozing

✅ | Faqat lotin harflarda boʻlsin!
",
'reply_markup'=>$ort,
    ]);
    file_put_contents("Bot/2.step","ser5");
}
if($step2=="ser5"){ 
if(mb_stripos($text,"🕋")!==false or mb_stripos($text,"🎁")!==false or mb_stripos($text,"📚")!==false or mb_stripos($text,"🎄")!==false or mb_stripos($text,"🗞")!==false or mb_stripos($text,"/")!==false or mb_stripos($text,"🔃")!==false or mb_stripos($text,"❌")!==false){
}else{
file_put_contents("Bot/2.step","");
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"✅ |  Tayorlanmoqda....",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
$toza = bot('sendPhoto',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'photo'=>"https://coderoff.myxvest.ru/Apilarim1/tugilgankun/index.php?text=$text",
 'caption'=>"✅ | Buyurtmangiz tayyor!\n🔴 | Siz yozgan soʻz: $text,\n🎁 | Botimiz : $botname",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
$toza = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>🔰 | Bosh menyu </i>",
'parse_mode'=>html,
'reply_markup'=>$menu,
]);
}
}
////new panel

$update = json_decode(file_get_contents('php://input'));
$admin = "1989157159";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$tx = $message->text;
$text= $message->text;
$ism = file_get_contents("Veb_code/$cid.ism");
$sguruhlar = file_get_contents("Stat/sguruh.dat");
$lichka = file_get_contents("Stat/lichka.dat");
$guruhlar = file_get_contents("Stat/guruh.dat");
$kanallar = file_get_contents("Stat/kanallar.dat");
//$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/$cid.step3");
///$step1 = file_get_contents("Bot/$chat_id2.step");
$name = $message->chat->first_name;
$user = $message->from->username;
$soat = date('H•i', strtotime('2 hour'));
mkdir("Bot");
mkdir("Stat");
mkdir("Veb_code");

$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔰 Azolarga Xabar"],['text'=>"🔰Azolarga forward"]],
[['text'=>"🔰 Guruhga Xabar"],['text'=>"🔰Guruhga forward"]],
[['text'=>"🔰 Shaxsiy Guruhlarga Xabar"]],
[['text'=>"🔰 Shaxsiy Guruhlarga forward"]],
[['text'=>"📗 Statistika"],['text'=>"🔙Orqaga"]],
]
]);



$ortga = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❌Bekor qilish"]],
]
]);


if($text=="/panel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Panel ochildi!",
'reply_markup'=>$adminpanel,
]);
}





$lichka = file_get_contents("Stat/lichka.dat");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("Stat/lichka.dat","$lichka\n$cid");
}
}
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

$sguruhlar = file_get_contents("Stat/sguruh.dat");
if($type=="group"){
if(stripos($sguruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/sguruh.dat","$sguruhlar\n$cid");
}
}
///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

$guruhlar = file_get_contents("Stat/guruh.dat");
if($type=="supergroup"){
if(stripos($guruhlar,"$cid") !==false){
}else{
file_put_contents("Stat/guruh.dat","$guruhlar\n$cid");
}
}

$kanallar = file_get_contents("Stat/kanallar.dat");
if($type=="channel"){
if(stripos($kanallar,"$cid") !==false){
}else{
file_put_contents("Stat/kanallar.dat","$kanallar\n$cid");
}
}///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!




if($tx=="🔰Azolarga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","forward");
}

if($step3=="forward" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

}
if($xabarok){
$us = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}



///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!


if($tx=="🔰Guruhga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","12");
}

if($step3=="12" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=bot('ForwardMessage',[
'chat_id'=>$guruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
//exit();
}///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01 )! manbaa qolsin!

if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}

if($tx=="🔰 Shaxsiy Guruhlarga forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","forwardsgr");
}

if($step3=="forwardsgr" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=bot('ForwardMessage',[
'chat_id'=>$sguruhs,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!

}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}


if($tx=="❌Bekor qilish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*❌ Xabar yuborish bekor qilindi✅*",
'parse_mode'=>'markdown',
'reply_markup'=>$adminpanel,
]);
}
///-----Dasturchi : @veb_code @update_off ---kanal @firdavs2004 va @php_bot_kodlari bundan ham zor kodlar bor )! manbaa qolsin!


///oddiy xabar
if($tx=="🔰 Azolarga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","oddiy");
}

if($step3=="oddiy" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarok){
$us = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $us ta bot a'zolariga yetkazildi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();///-----Dasturchi : @veb_code @update_off ---kanal @firdavs2004 va @php_bot_kodlari bundan ham zor kodlar bor )! manbaa qolsin!

}

///oddiy guruhga

if($tx=="🔰 Guruhga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","1202");
}

if($step3=="1202" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$guruhlarim = explode("\n",$guruhlar);
foreach($guruhlarim as $guruhs){
$xabarokkk=bot('sendmessage',[
'chat_id'=>$guruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($xabarokkk){
$gr = substr_count($guruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $gr ta ommaviy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}


///odiy shaxsiy guruhga

if($tx=="🔰 Shaxsiy Guruhlarga Xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar matnini kirgazing!\n🛂Eslatma xabar yuborish \n1-5 daqiqagacha boladi!",
'reply_markup'=>$ortga,
]);
file_put_contents("Bot/$cid.step3","forwardsgr1");
}
///-----Dasturchi : @veb_code @update_off ---kanal @firdavs2004 va @php_bot_kodlari bundan ham zor kodlar bor )! manbaa qolsin!

if($step3=="forwardsgr1" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("Bot/$cid.step3","");
}else{
$sguruhlarim = explode("\n",$sguruhlar);
foreach($sguruhlarim as $sguruhs){
$sxabarokkk=bot('sendMessage',[
'chat_id'=>$sguruhs,
'text'=>$text,
'message_id'=>$mid,
]);
}
}
//exit();
}
if($sxabarokkk){
$sgr = substr_count($sguruhlar,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Xabar $sgr ta shaxsiy guruhlarga forward qilindi",
'reply_markup'=>$adminpanel,
]);
file_put_contents("Bot/$cid.step3","");
unlink("Bot/$cid.step3","");
exit();
}



if($text == "📗 Statistika" and $cid==$admin){
$date = date('d.m.Y - H:s a');
$gr = substr_count($guruhlar,"\n");
$lc = substr_count($lichka,"\n");
$sgr = substr_count($sguruhlar,"\n");
$kn = substr_count($kanallar,"\n");
bot('SendMessage',[
'chat_id'=>$cid,
parse_mode=>html, 
'text'=>"
⏳ Hozirgi $date vaqtiga ko'ra umumiy obunachilar $lc ta
🔰 Ommaviy guruhlar : $gr ta
🔰 Shaxsiy guruhlar : $sgr ta",
]);
}



///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01! manbaa qolsin!




if($text=="🔙Orqaga"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Panel yopildi :)",
'reply_markup'=>$menu
]);
}



if($toza){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$miid,
]);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$miid-1,
]);
}///-----Dasturchi : @veb_code @update_off ---kanal @Profile_images_01)! manbaa qolsin!


?>