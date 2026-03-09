<?php
$apiKey = "OPENAI KEY";

$cv_text = $_POST['cv'] ?? "";

if(!$cv_text){
    echo "Please provide your CV text.";
    exit;
}

$data = [
    "model"=>"gpt-4.1-mini",
    "messages"=>[
        ["role"=>"system","content"=>"You are a professional career coach."],
        ["role"=>"user","content"=>"Please analyze this CV and provide suggestions to improve it, make it stronger, and add impactful phrases:\n\n".$cv_text]
    ]
];

$ch = curl_init("https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,[
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response,true);
echo $result["choices"][0]["message"]["content"];
?>