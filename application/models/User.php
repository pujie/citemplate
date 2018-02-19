<?php
class User extends CI_Model{
    var $auth0client_id = 'KP8LNulC5elIugFvdwH8O7JWa7H5G7AC';
    function __construct(){
        parent::__construct();
    }
    function createpassword(){
        $rand = random_string('alnum',10);
        return sha1($rand);
    }
}