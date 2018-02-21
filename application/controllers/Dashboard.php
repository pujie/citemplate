<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->twig->display('master/master_1/dashboard');
    }
}