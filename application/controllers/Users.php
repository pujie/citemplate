<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $user = new User();
        echo $user->createpassword();
    }
}