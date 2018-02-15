<?php
class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function login(){
/*        require_once './vendor/autoload.php';
        $loader = new Twig_Loader_Array(array(
            'index' => 'Hello {{ name }}!',
        ));
        $twig = new Twig_Environment($loader);*/
//        echo $twig->render('test.html', array('name' => 'Fabien'));
        $this->twig->display('login/login', []);
//        $this->load->view('login/login');
    }
    function index(){
        redirect ('main/login');
    }
}