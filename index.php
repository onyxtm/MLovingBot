<?php
/**
 * Created by Magicode.
 * Creators: Morteza Bagheri & Mahdi Bagheri
 * Start Code Date: 6/17/2017
 * Start Code Time: 10:34 AM
 */

include "webhook.php";
include "telegramClass.php";
include "function.php";
include "Lang/EN-FA.php";//Main Language

$update = json_decode(file_get_contents("php://input"));
$bot_username = telegram("getMe")->result->username;
$from_id = $update->message->from->id;

$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if (!in_array($from_id, $members)) {
    $add_user = file_get_contents('users.txt');
    $add_user = $add_user . $from_id . "\n";
    file_put_contents('users.txt', $add_user);
}

if (!is_file("users/$from_id-step.txt")) {
    file_put_contents("users/$from_id-step.txt", "0");
}
if (!is_file("users/$from_id-conut.txt")) {
    file_put_contents("users/$from_id-conut.txt", "0");
}

if (in_array($from_id, BLOCK_ID)) {
    eval(base64_decode("YmFzZTY0X2RlY29kZSgiSkdSaGRHRWdQU0JiRFFvZ0lDQWdJQ0FnSUNKamFHRjBYMmxrSWlBOVBpQWtabkp2YlY5cFpDd05DaUFnSUNBZ0lDQWdJblJsZUhRaUlEMCtJRUpNVDBOTFgxUkZXRlFOQ2lBZ0lDQmRPdzBLSUNBZ0lIUmxiR1ZuY21GdEtDSnpaVzVrVFdWemMyRm5aU0lzSUNSa1lYUmhLVHM9Iik=")); // Block Users
} else {
    eval(base64_decode("YmFzZTY0X2RlY29kZSgiSUNBZ0lDUnlJRDBnY0hKcGRtRjBaVjlqYjJSbEtDUjFjR1JoZEdVc0lFRlFTVjlMUlZrc0lDUkRTRUZPVGtWTVgxVlRSVkpPUVUxRkxDQkNURTlEUzE5SlJDazdEUW89Iik=")); // Private Chat Code
}
eval(base64_decode("Y2FsbGJhY2tfcXVlcnlfY29kZSgkdXBkYXRlLCBBUElfS0VZLCAkQ0hBTk5FTF9VU0VSTkFNRSk7DQo=")); // Call Back Query Code

//eval(base64_decode("cHJvbW90ZVVzZXIoJHVwZGF0ZSwgQVBJX0tFWSwgJENIQU5ORUxfVVNFUk5BTUUpOw0K")); // Promote User

eval(base64_decode("aW5saW5lX3F1ZXJ5X2NvZGUoJHVwZGF0ZSwgQVBJX0tFWSwgJENIQU5ORUxfVVNFUk5BTUUsICRTT1VSQ0VfVVJMKTs=")); // Inline Query Code