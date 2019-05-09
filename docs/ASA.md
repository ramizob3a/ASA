# ASA-Free
Create Best Bot With ASA Library

<html>



<b>Connect Bot 🔘</b>
<pre>$RamiX = new ASA("123456:abcdefg1936191719"); </pre>

<b> You Can set proxy for connect to api Telegram👇</b>
<pre>$RamiX->Proxy($url, $port = 80, $username = null, $password = null, $type = 'HTTP');</pre>

<b> You can connect api telegram 👇 </b>
<pre>$Ramix->api($method, $datas = []);</pre>

<b> You can open Link and Extract Data 👇 </b>
<pre>$RamiX->GetLink($url);</pre>

<b>You need Set Data for send to api telegram (for example fileid, text and more)</b>


<pre>$RamiX->SetData("Hello World😍👌");</pre>

<b>You can set From id (chat) for forwardmessage and more...</b>
<pre>$RamiX->SetFromChatID($chat_id);</pre>

<b>You Can Set Caption for Files 👇</b>
<pre>$RamiX->SetCaption("This File Only For You❤");</pre>

<b>You need Set Chat ID for send for users 👇 </b>
<pre>$RamiX->SetChatID(323823995);</pre>

<b> You can set MessageID for editmessage and more...👇 </b>
<pre>$RamiX->SetMessageID(1828181);</pre>

<b> You can set ParseMode for SetData(text) 👇 </b>
<pre>$RamiX->ParseMode("markdown");</pre>

<b> You can set Duration of video/music and more...👇</b>
<pre>$RamiX->Duration(20);</pre>

<b> You can Reply to Message with message id 👇 </b>
<pre>$RamiX->ReplyToMessage(1826);</pre>

<b> You can add new ones to the previous data 👇 </b>
<pre>
$RamiX->SetData("Hello ");

$RamiX->AddData("World!");

$RamiX->SendMessage();
//Hello World!

</pre>

<b> You can add new ones to the previous caption 👇 </b>
<pre>
$RamiX->SetCaption("Hello ");

$RamiX->AddCaption("World!");

$RamiX->SendPhoto();
//file photo and caption Hello World!

</pre>

  


<b> You can add keyboard for send (ReplyMarkup) 👇 </b>
<pre>$RamiX->ReplyMarkup(['keyboard'=>[
                [
                ['text'=>'1'],['text'=>'2']
                ],
                [
                ['text'=>'3'],['text'=>'4']
                ],

              ]]);
</pre>

<b> You can Set Files For create Sticker</b>
<pre>$RamiX->StickerPack($stickers=[]);</pre>

<b> You can use the folder name if you can not find the file list </b>
<pre>$RamiX->StickerPackFolder($folderp,$emoji=[]);</pre>

<b> Set the name sticker for link sticker </b>
<pre>$RamiX->StickerName("NAME");</pre>

<b> you need Set the title sticker! use this </b>
<pre>$RamiX->StickerTitle($title);</pre>

<b> you can change file id to url link (warning: url link have token)</b>
<pre> $RamiX->FileID2Link($fileid); </pre>
  

<b> If you do not like to open the links in your message before send, use this 👇 </b>
<pre>$RamiX->DisableWebPagePreview(true);</pre>

<b> After settings,you can use this for send data to telegram<b>
<pre>
$RamiX->SendMessage();
$RamiX->EditMessage($inline=false);
$RamiX->DeleteMessage();
$RamiX->SendDocument();
$RamiX->SendSticker();
$RamiX->SendVideo($width = null, $height = null);
$RamiX->SendVoice();
$RamiX->SendContact($first_name, $last_name = null); (SetData = phone_number)
$RamiX->IsJoinUser($channel);
$RamiX->ForwardMessage();
$RamiX->CreateSticker();
</pre>

<b>You can use this variable to get the message id from the last message send</b>
<pre>
$RamiX->SetChatID($chat_id);
$RamiX->SetData(1);
$RamiX->SendMessage();
$MID = $RamiX->SendMessageMI;
$RamiX->SetMessageID($MID);
$RamiX->SetData(2);
$RamiX->EditMessage();
$RamiX->SetData(3);
$RamiX->EditMessage();
$RamiX->SetData(4);
$RamiX->EditMessage();
$RamiX->SetData(5);
$RamiX->EditMessage();
}
</pre>

</html>