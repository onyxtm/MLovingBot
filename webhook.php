<?php
/**
 * Created by Magicode.
 * Creators: Morteza Bagheri & Mahdi Bagheri
 * Start Code Date: 6/17/2017
 * Start Code Time: 10:34 AM
 */

$TOKEN = "Your Telegram Token";

$SOURCE_URL = "Main Source Addres";
$URL = "index.php"; // دست نزن

$CHANNEL_USERNAME = "@CHANNEL_USERNAME";
$JOIN_LINK = "CHANNEL_JOIN_LINK";

define("API_KEY", $TOKEN); //دست نزن
define("BLOCK_ID", array("384259342", "327461766", "279252381", "416910662"));

function telegram($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
    return null;
}

if ($_GET["ok"]) {
    $res = telegram("setWebHook", [
        "url" => $SOURCE_URL . $URL
    ]);
}


