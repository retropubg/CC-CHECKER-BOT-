<?php

$botToken = "7851924299:AAEj70SJUOzeS5w-GHUpUiK-GiPV1CHRaSE";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>6699273462</code>';
$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
$owner = '<code>5816878847</code>';




//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "Oᴡɴᴇʀ", 'url' => "https://t.me/iam_daxx"],
            ['text' => "Fʀᴇᴇ Pʀᴇᴍɪᴜᴍ", 'url' => "https://t.me/ALLTYPECC"],
        ],
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" . str_repeat(' ', 20) . "𝖦𝖠𝖳𝖤𝖶𝖠𝖸𝖲" . str_repeat(' ', 20) . "\n━━━━━━━━━━━━━━━━━━━\n • ┌TOTAL GATES ⇢ 9\n • ├PREMIUM GATES ❥︎ 5\n • └FREE GATES ⇢ 4\n\n ├𝖡𝖮𝖳 𝖡𝖸 ❥︎  @CARD3DBOT</b>";

    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" 
               . str_repeat(' ', 20) . "𝖦𝖠𝖳𝖤𝖶𝖠𝖸𝖲" 
               . str_repeat(' ', 20) 
               . "\n━━━━━━━━━━━━━━━━━━━\n •├𝗧𝗼𝘁𝗮𝗹  𝗚𝗔𝗧𝗘𝗦 ⇢ 9\n •├𝗣𝗥𝗘𝗠𝗜𝗨𝗠  𝗚𝗔𝗧𝗘𝗦 ⇢ 5 \n •├𝗙𝗥𝗘𝗘 𝗚𝗔𝗧𝗘𝗦 ⇢ 4\n\n━━━━━━━━━━━━━━━━━━━\n •├Dev ➳ <code>@CARD3DBOT</code></b>";

    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => 'Pʀᴇᴍɪᴜᴍ', 'callback_data' => 'premium'], ['text' => 'Fʀᴇᴇ', 'callback_data' => 'free']],
            [['text' => 'Bᴀᴄᴋ', 'callback_data' => 'back2']]
        ]
    ]);
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>━━━━━━━━━━━━━━━━━━━\n" 
               . str_repeat(' ', 20) . "𝖦𝖠𝖳𝖤𝖶𝖠𝖸𝖲" 
               . str_repeat(' ', 20) 
               . "\n━━━━━━━━━━━━━━━━━━━\n •├𝗧𝗼𝘁𝗮𝗹 𝗚𝗔𝗧𝗘𝗦 ⇢ 9\n •├𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗚𝗔𝗧𝗘𝗦 ⇢ 5\n •├𝗙𝗥𝗘𝗘  𝗚𝗔𝗧𝗘𝗦 ⇢ 4\n\n━━━━━━━━━━━━━━━━━━━\n •├Dev ➳ <code>@iam_daxx</code></b>";

  
    $gatesKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => 'Pʀᴇᴍɪᴜᴍ ', 'callback_data' => 'premium'], ['text' => 'Fʀᴇᴇ ', 'callback_data' => 'free']],
            [['text' => 'Bᴀᴄᴋ', 'callback_data' => 'back2']]
        ]
    ]);

    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => 'Pʀᴇᴍɪᴜᴍ', 'callback_data' => 'premium'],
            ['text' => 'Bᴀᴄᴋ', 'callback_data' => 'back']
        ]
    ]
]);

if ($cdata2 == "free") {
    $freeText = "<b>\n𝗙𝗥𝗘𝗘 𝗚𝗔𝗧𝗘𝗦 ⇢\n\n ═════════════════\n├<u>𝖦𝖠𝖳𝖤𝖶𝖠𝖸 </u> : 𝖲𝖳𝖱𝖨𝖯𝖤 𝖢𝖧𝖠𝖱𝖦𝖤 1💲 ✅ 
├𝐔𝐒𝐄𝐑 : 𝗙𝗥𝗘𝗘 𝖮𝖭 ✅
├𝐔𝐒𝐀𝐆𝐄 : <code>/au cc|mm|exp|cvv  </code>\n\n├<u>𝖦𝖠𝖳𝖤𝖶𝖠𝖸</u> : SHOPIFY ❌
├𝐔𝐒𝐄𝐑 : 𝗙𝗥𝗘𝗘  𝖲𝖮𝖮𝖭 ✅ 
├𝐔𝐒𝐀𝐆𝐄 : <code>/sr cc|mm|exp|cvv </code>\n\n├<u>𝖦𝖠𝖳𝖤𝖶𝖠𝖸</u> : PAYPAL
├𝐔𝐒𝐄𝐑 : 𝗙𝗥𝗘𝗘 𝖮𝖭 ✅
├𝐔𝐒𝐀𝐆𝐄 : <code>/pp cc|mm|exp|cvv
</code>\n\n├<u>𝖦𝖠𝖳𝖤𝖶𝖠𝖸</u> : 
├𝐔𝐒𝐄𝐑 :𝗙𝗥𝗘𝗘 𝖮𝖭 ✅
├𝐔𝐒𝐀𝐆𝐄 : <code>/ccn cc|mm|exp|cvv
</code>\n═════════════════\n</b>";

    // Replace this with your video URL
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}


//========Premium and free=======//
$freeButton = json_encode([
    'inline_keyboard' => [
        [
            ['text' => 'Fʀᴇᴇ ', 'callback_data' => 'free'],
            ['text' => 'Bᴀᴄᴋ ', 'callback_data' => 'back']
        ]
    ]
]);

if ($cdata2 == "premium") {
   $premiumText = "┏                                                  ┓
 〤𝖯𝖱𝖤𝖬𝖨𝖴𝖬 𝖦𝖠𝖳𝖤𝖶𝖠𝖸〤  
┗                                                  ┛
- - - - - - - - - - - - - - - - - - - - -
𝖦𝖠𝖳𝖤𝖶𝖠𝖸❄️𝖲𝖰𝖴𝖠𝖱𝖤 𝖠𝖴𝖳𝖧 
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ  🎫 ]
┣ꜰᴏʀᴍᴀᴛ: /b3 ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
𝖦𝖠𝖳𝖤𝖶𝖠𝖸 ❄️ 𝖢𝖢𝖭 𝖢𝖧𝖠𝖱𝖦𝖤
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ  🎫 ]
┣ꜰᴏʀᴍᴀᴛ: /ccn ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
 𝖦𝖠𝖳𝖤𝖶𝖠𝖸 ❄️ 𝖲𝖳𝖱𝖨𝖯𝖤  [ 𝟭$ ]
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ  🎫 ]
┣ꜰᴏʀᴍᴀᴛ: /chk ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -
𝖦𝖠𝖳𝖤𝖶𝖠𝖸 ❄️ BRAINTREE
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ᴘʀᴇᴍɪᴜᴍ  🎫 ]
┣ꜰᴏʀᴍᴀᴛ: /bra ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
𝖦𝖠𝖳𝖤𝖶𝖠𝖸 ❄️ 𝖯𝖠𝖸𝖥𝖫𝖮𝖶 𝖠𝖵𝖲
┣ꜱᴛᴀᴛᴜꜱ [ ᴏɴʟɪɴᴇ ✅ ]
┣ᴜꜱᴇʀ [ ꜰʀᴇᴇ  ]
┣ꜰᴏʀᴍᴀᴛ: /pf ᴄᴄ|ᴍᴏɴᴛʜ|ʏᴇᴀʀ|ᴄᴠᴠ
- - - - - - - - - - - - - - - - - - - - -

┗━━━━━━━━━━━━━━━━━━━
";

    // Replace this with your video URL
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}


//=======Premium and free end=====//


//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "Gᴀᴛᴇs", 'callback_data' => 'gates'], ['text' => "Bᴀᴄᴋ", 'callback_data' => 'back2']]
    ]
]);



if ($cdata2 == "herr") {

  $toolcmds = "<b>
🛠️ Tᴏᴏʟs 🛠️
═════════════════
├<u>𝖴𝖲𝖤𝖱𝖲-𝖨𝖭𝖥𝖮</u> » /id\n├𝐔𝐒𝐀𝐆𝐄 » <code>/id</code>

├<u>𝖨𝖯-𝖫𝖮𝖮𝖪𝖴𝖯</u> » /ip\n├𝐔𝐒𝐀𝐆𝐄 »/ip <code>1.1.1.1</code>

├<u>𝖡𝖨𝖭-𝖫𝖮𝖮𝖪𝖴𝖯</u> » /bin\n├𝐔𝐒𝐀𝐆𝐄 » <code>/bin 601120</code> 

├<u>𝖢𝖢-𝖦𝖤𝖭𝖤𝖱𝖠𝖳𝖤</u> » /gen\n├𝐔𝐒𝐀𝐆𝐄 » <code>/gen 601120xxx|xx|xx|xxx</code>

├<u>𝖢𝖱𝖤𝖣𝖨𝖳𝖲-𝖢𝖧𝖤𝖢𝖬</u> » /credits \n├𝐔𝐒𝐀𝐆𝐄 »<code> /credits Check </code>

├<u>𝖥𝖠𝖪𝖤-𝖠𝖣𝖣𝖱𝖤𝖲𝖲</u> » /fake\n├𝐔𝐒𝐀𝐆𝐄 » <code>/fake us</code>

├<u>𝖲𝖪-𝖢𝖧𝖤𝖢𝖪𝖤𝖱</u> » /sk\n├𝐔𝐒𝐀𝐆𝐄 » <code>/sk sk_live_</code>
 
═════════════════

               </b>";
  
    // Change this to your video URL
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============TOOLS END============//

//=============PRICE===============//
if ($cdata2 == "price") {
    $priceText = "<b>\n" . str_repeat(' ', 2) ."𝗣𝗥𝗘𝗠𝗜𝗨𝗠 𝗨𝗦𝗘𝗥 𝗣𝗥𝗜𝗖𝗘 𝗟𝗜𝗦𝗧" . str_repeat(' ', 20) . "\n═════════════════\n •├3 𝖣𝖠𝖸𝖲 𝖯𝖫𝖠𝖭⇢ 1💲\n •├7 𝖣𝖠𝖸𝖲 𝖯𝖫𝖠𝖭 ⇢ 3💲\n •├15 𝖣𝖠𝖸𝖲 𝖯𝖫𝖠𝖭 ⇢ 6💲\n •├30 𝖣𝖠𝖸𝖲 𝖯𝖫𝖠𝖭 ⇢ 10💲\n═════════════════\n •├Dev ➳ <code>@iam_daxx</code>\n━━━━━━━━━━━━━━━━━━━</b>";

    $priceKeyboard = json_encode([
        'inline_keyboard' => [
            [['text' => 'Hᴏᴍᴇ🏡', 'callback_data' => 'back2'], ['text' => 'Bᴜʏ🛒', 'url' => 'https://t.me/iam_daxx']]
        ]
    ]);

    // Change this to your video URL
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $priceText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($priceKeyboard));
}



//=============PRICE END============//

if ($cdata2 == "finalize") {
    if ($callbackfrom != $callbackuserid) {

    bot('answerCallbackQuery', [
      'callback_query_id' => $callbackid,
      'text' => "𝖡𝖧𝖠𝖨 𝖳𝖤𝖱𝖤 𝖲𝖤 𝖭𝖧𝖨 𝖧𝖮𝖦𝖠 𝖳𝖴 𝖱𝖠𝖧𝖭𝖤 𝖣𝖤",
      "show_alert" => true
    ]);

  } else {
file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$cchatid2&message_id=$cmessage_id2");
}
}





//========finalize end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "Gʀᴏᴜᴘ", 'url' => "https://t.me/DAXXSUPPORT"], ['text' => "Cʜᴀɴɴᴇʟ", 'url' => "https://t.me/ALLTYPECC"]],
        [['text' => "Bᴀᴄᴋ", 'callback_data' => 'back2']]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "<b>𝖩𝖮𝖨𝖭 𝖮𝖴𝖱 𝖮𝖥𝖥𝖨𝖢𝖨𝖠𝖫 𝖦𝖱𝖮𝖴𝖯 𝖮𝖱 𝖢𝖧𝖠𝖭𝖭𝖤𝖫</b>";
    
    // Change this to your video URL
    $videoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("<b>ᴡᴇʟᴄᴏᴍᴇ ᴛᴏ sᴇᴄʀᴇᴛ ᴄᴏᴍᴍᴀɴᴅs sᴇᴄᴛɪᴏɴ  $firstname
    
ᴇxᴘʟᴏʀᴇ ᴍʏ sᴛᴜғғ 🌏</b>");
    
    // Change this to your video url
    $backVideoUrl = "https://telegra.ph/file/50ee9606de7e5bdd3eef0.mp4"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                ['text' => 'Gᴀᴛᴇs', 'callback_data' => 'gates'],
                ['text' => 'Tᴏᴏʟs', 'callback_data' => 'herr'],
                ['text' => 'Pʀɪᴄᴇ ', 'callback_data' => 'price'],
            ],
            [
                ['text' => 'Fɪɴᴀʟɪᴢᴇ', 'callback_data' => 'finalize'],
            ],
            [
                ['text' => 'Oғғɪᴄɪᴀʟ Gʀᴏᴜᴘ ', 'callback_data' => 'channel'],
            ],
        ]
    ]);

    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";
    
    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id_1) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
	file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);
  
};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{
  
$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);
  
}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

    
