<?php
class Surveys extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function edit(){
        $this->twig->display('sales/surveys/edit');
    }
    function index(){
        if($this->uri->total_segments()<3){
            $segment = 1;
        }else{
            $segment = $this->uri->segment(3);
        }
        $objs = $this->client->gets($segment,4);
        $totalrows = $this->client->totalrows();
        $data = array('objs'=>$objs,'totalrows'=>$totalrows);
        $this->load->library('pagination');
        $config['base_url'] = '/surveys/index';
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 4;
        $config['attributes'] = array('class' => 'pagination');
        $config['display_pages'] = TRUE;
        $config['full_tag_open'] = '<div>';
        $config['full_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<a class="pagination cur">';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = '<i class="icon-double-angle-left"></i>';
        $config['next_link'] = '<i class="icon-double-angle-right"></i>';

        $this->pagination->initialize($config);
        $links =  $this->pagination->create_links();
        $this->twig->display('sales/surveys/index', array(
            'objs'=>$objs,
            'totalrows'=>$totalrows,
            'links'=>$links
        ));
    }
    function installadd(){
        $this->twig->display('sales/surveys/installadd', []);
    }
}