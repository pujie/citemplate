<?php
class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function login(){
        $this->twig->display('login/login', []);
    }
    function index(){
        redirect ('main/login');
    }
}