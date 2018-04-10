<?php

class InstagramAPI {

    CONST CLIENT_ID = 'your clien id';
    CONST REDIRECT_URI = 'your redirect uri';

    public function redirectAuth(){
        return header('location: https://api.instagram.com/oauth/authorize/?client_id=' . self::CLIENT_ID . '&redirect_uri='. self::REDIRECT_URI .'&response_type=code');
    }

    public function getTag(){
    // 
    }


}