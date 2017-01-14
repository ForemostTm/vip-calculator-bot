<?php
//neveshteh shode tvasatoe #elyas #galikeshi @sudo_avenger
include('jdf.php');
ob_start();
//token ro inja vared konid
define('API_KEY','[TOKEN]');
$admin = "[ADMIN]";
$admin2 = "93161337";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
}
$boolean = file_get_contents('booleans.txt');
$booleans= explode("\n",$boolean);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$editm = $update->edited_message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$fname = $message->chat->first_name;
$uname = $message->chat->username;
$text1 = $message->text;
$fadmin = $message->from->id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$reply = $update->message->reply_to_message->forward_from->id;
$forward = $update->message->forward_from;
$query=$update->callback_query;
$inline=$update->inline_query;
$channel_forward = $update->channel_post->forward_from;
$channel_text = $update->channel_post->text;
$messageid = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
$step=file_get_contents("type2.txt");
mkdir("matn");
$bolen=file_get_contents("bolen.txt");
mkdir("matn");
$keyboard=json_encode([
'inline_keyboard'=>[
[
['text'=>"1",'callback_data'=>"1"],['text'=>"2",'callback_data'=>"2"],['text'=>"3",'callback_data'=>"3"],['text'=>"+",'callback_data'=>"+"],
],
[
['text'=>"4",'callback_data'=>"4"],['text'=>"5",'callback_data'=>"5"],['text'=>"6",'callback_data'=>"6"],['text'=>"-",'callback_data'=>"-"],
],
[
['text'=>"7",'callback_data'=>"7"],['text'=>"8",'callback_data'=>"8"],['text'=>"9",'callback_data'=>"9"],['text'=>"×",'callback_data'=>"×"],
],
[
['text'=>"‌‌ ‌",'callback_data'=>"‌‌ ‌‌‌"],['text'=>"0",'callback_data'=>"0"],['text'=>"‌‌ ‌‌",'callback_data'=>"‌‌ ‌‌"],['text'=>"÷",'callback_data'=>"÷"],
],
[
['text'=>"=",'callback_data'=>"="],['text'=>"C",'callback_data'=>"C"],
],
]
]);
if($text1=="/start"){
	if($chat_id==$admin){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام به ماشین حساب پیشرفته من خوش آمدید😃❤\n\n@foremost_team",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"📟ورود به ماشین حساب📟",'callback_data'=>"vorod"]
	]
	]
	]),
	]);
		bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>"is_typing",
	]);
	}else{
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>"is_typing",
	]);
	
	bot('sendmessage',[
'chat_id'=>$chat_id,
	'text'=>"سلام به ماشین حساب پیشرفته من خوش آمدید😃❤\n\n@foremost_team",
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"📟ورود به ماشین حساب📟",'callback_data'=>"vorod"]
	]
	]
	]),
	]);
	
	}
	
		}elseif($data=="1"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);

				bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="2"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");

$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
				bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="vorod"){
			$file = fopen("mashin.txt","w");
			$file2=fwrite($file,"r");
			
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
				bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}
		elseif($data=="3"){
				$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");

$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
	bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="4"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="5"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);

		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> "."$text8",
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="6"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="7"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="8"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");

$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="9"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="0"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");

$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="+"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="×"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="-"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");

$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="÷"){
			$file = fopen("mashin.txt","a");
$text3= fwrite($file,"$data");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="C"){
			$file = fopen("mashin.txt","w");
$text3= fwrite($file,"r");
$text2=file_get_contents("mashin.txt");
$text8=Str_replace('r','',$text2);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"=====> ".$text8,
		'message_id'=>$messageid,
		'reply_markup'=>$keyboard
		]);
		}elseif($data=="="){
$text2=file_get_contents("mashin.txt");
$text3=Str_replace("+","%2B",$text2);
$text4=Str_replace("×","*",$text3);
$text5=Str_replace("÷","/",$text4);
$text8=Str_replace('r','',$text5);
$text6="http://down-roid.ir/vip9.php?text=$text8";
$text7=file_get_contents($text6);
		bot('editmessagetext',[
		'chat_id'=>$chatid,
		'text'=>"جواب معادله ی شما حل شد 😎😎\n$text7",
		'message_id'=>$messageid,
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[
		['text'=>"💥دوباره💥",'callback_data'=>"vorod"],
		]	
		]])
		]);
		}
			
}
