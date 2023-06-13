<?php

function translateTextGoogle($text, $targetLanguage) {
    
    // Add your Google Translate API Key here
    $apiKey = "AIzaSyBOti4mM-6x9WDnZIjIeyEU21OpBXqWBgw";

    // The source language is automatically detected
    $sourceLanguage = "auto";

    $text = urlencode($text);

    // Make a request to the Google Translate API
    //$response = file_get_contents("https://translation.googleapis.com/language/translate/v2?key=$apiKey&source=$sourceLanguage&target=$targetLanguage&q=$text");
    $response = file_get_contents("https://translation.googleapis.com/language/translate/v2?key=$apiKey&target=$targetLanguage&q=$text");
    //echo($response);
    $response = json_decode($response, true);
    //print_r($response);

    $res=$response['data']['translations'][0]['translatedText'];
    echo("translation=$res\n");
    return $res;
}
