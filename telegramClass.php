<?php

/**
 * Created by Magicode & PhPBots & SellGate.
 * Creators: Morteza Bagheri
 * Powred by @mench
 * Any copying is forbidden and is for personal use only
 */
class Magicode
{

    public function telegram($token, $method, $datas = [])
    {
        $url = "https://api.telegram.org/bot" . $token . "/" . $method;
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
        return $res;
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendmessage
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendMessage($token, $datas = [])
    {
        return $this->telegram($token, "sendMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendphoto
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendPhoto($token, $datas = [])
    {
        return $this->telegram($token, "sendPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvideo
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendVideo($token, $datas = [])
    {
        return $this->telegram($token, "sendVideo", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#senddocument
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendDocument($token, $datas = [])
    {
        return $this->telegram($token, "sendDocument", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendaudio
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendAudio($token, $datas = [])
    {
        return $this->telegram($token, "sendAudio", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvoice
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendVoice($token, $datas = [])
    {
        return $this->telegram($token, "sendVoice", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getme
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getMe($token)
    {
        return $this->telegram($token, "getMe");
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendsticker
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendSticker($token, $datas = [])
    {
        return $this->telegram($token, "sendSticker", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvideonote
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendVideoNote($token, $datas = [])
    {
        return $this->telegram($token, "sendVideoNote", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendlocation
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendLocation($token, $datas = [])
    {
        return $this->telegram($token, "sendLocation", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvenue
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendVenue($token, $datas = [])
    {
        return $this->telegram($token, "sendVenue", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendcontact
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendContact($token, $datas = [])
    {
        return $this->telegram($token, "sendContact", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getfile
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getFile($token, $datas = [])
    {
        return $this->telegram($token, "getFile", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#kickchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function kickChatMember($token, $datas = [])
    {
        return $this->telegram($token, "kickChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#unbanchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function unbanChatMember($token, $datas = [])
    {
        return $this->telegram($token, "unbanChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#restrictchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function restrictChatMember($token, $datas = [])
    {
        return $this->telegram($token, "restrictChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#forwardmessage
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function forwardMessage($token, $datas = [])
    {
        return $this->telegram($token, "forwardMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#promotechatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function promoteChatMember($token, $datas = [])
    {
        return $this->telegram($token, "promoteChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#exportchatinvitelink
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function exportChatInviteLink($token, $datas = [])
    {
        return $this->telegram($token, "exportChatInviteLink", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchatphoto
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function setChatPhoto($token, $datas = [])
    {
        return $this->telegram($token, "setChatPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#deletechatphoto
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function deleteChatPhoto($token, $datas = [])
    {
        return $this->telegram($token, "deleteChatPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchattitle
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function setChatTitle($token, $datas = [])
    {
        return $this->telegram($token, "setChatTitle", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchatdescription
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function setChatDescription($token, $datas = [])
    {
        return $this->telegram($token, "setChatDescription", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#pinchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function pinChatMessage($token, $datas = [])
    {
        return $this->telegram($token, "pinChatMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#unpinchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function unpinChatMessage($token, $datas = [])
    {
        return $this->telegram($token, "unpinChatMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#leavechat
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function leaveChat($token, $datas = [])
    {
        return $this->telegram($token, "leaveChat", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatadminstators
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getChatAdministrators($token, $datas = [])
    {
        return $this->telegram($token, "getChatAdministrators", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatmemberscount
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getChatMembersCount($token, $datas = [])
    {
        return $this->telegram($token, "getChatMembersCount", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatmember
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getChatMember($token, $datas = [])
    {
        return $this->telegram($token, "getChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#answercallbackquery
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function answerCallbackQuery($token, $datas = [])
    {
        return $this->telegram($token, "answerCallbackQuery", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagetext
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function editMessageText($token, $datas = [])
    {
        return $this->telegram($token, "editMessageText", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagecaption
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function editMessageCaption($token, $datas = [])
    {
        return $this->telegram($token, "editMessageCaption", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagereplymarkup
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function editMessageReplyMarkup($token, $datas = [])
    {
        return $this->telegram($token, "editMessageReplyMarkup", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#deletemessage
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function deleteMessage($token, $datas = [])
    {
        return $this->telegram($token, "deleteMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#answerinlinequery
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function answerInlineQuery($token, $datas = [])
    {
        return $this->telegram($token, "answerInlineQuery", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getuserprofilephotos
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function getUserProfilePhotos($token, $datas = [])
    {
        return $this->telegram($token, "getUserProfilePhotos", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendchataction
     * t.me/phpbots
     * t.me/sellgate
     * return : Json
     */
    public function sendChatAction($token, $datas = [])
    {
        return $this->telegram($token, "sendChatAction", $datas);
    }
}


// instructions (DEMO)
/*
    define("API_KEY", "Token");
    //Or
    $token = API_KEY;

    $telegram = new Magicode();

    $data = [
       "chat_id" => 322242763,
       "text" => "Your Text"
    ];

    $telegram->sendMessage($token or API_KEY, $data);
/*
// Powered By @Mench