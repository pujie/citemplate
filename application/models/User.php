<?php
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function createpassword(){
        $rand = random_string('alnum',10);
        return sha1($rand);
    }
}