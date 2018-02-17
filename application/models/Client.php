<?php
class Client extends CI_Model{
    var $name,$address;
    function __construct(){
        parent::__construct();
    }
/*    function name(){
        return $this->name;
    }
    function address(){
        return $this->address;
    }*/
    function makefakeobj(){
        $arr = Array();
        $obj = new Client();
        $obj->name = "Jamu Ayah";
        $obj->address = "Jl Mayjen Sybgjibi 1";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Ibu";
        $obj->address = "Jl Mayjen Sungkono 2";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Kakek";
        $obj->address = "Jl Mayjen Sungkono 3";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Nenek";
        $obj->address = "Jl Mayjen Sungkono 4";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Adik";
        $obj->address = "Jl Mayjen Sungkono 5";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Kakak";
        $obj->address = "Jl Mayjen Sungkono 6";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Tante";
        $obj->address = "Jl Mayjen Sungkono 7";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Om";
        $obj->address = "Jl Mayjen Sungkono 8";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Saya";
        $obj->address = "Jl Mayjen Sungkono 9";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Mertua";
        $obj->address = "Jl Mayjen Sungkono 10";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Tetangga";
        $obj->address = "Jl Mayjen Sungkono 11";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Anak";
        $obj->address = "Jl Mayjen Sungkono 12";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Ayah";
        $obj->address = "Jl Mayjen Sungkono 13";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        $obj = new Client();
        $obj->name = "Jamu Ayah";
        $obj->address = "Jl Mayjen Sungkono 14";
        $obj->status = "Belum ada kesimpulan";
        $obj->tglsurvey = "01 Jan 2018";
        $obj->pic = "Agus";
        array_push($arr,$obj);
        return array(
            'count'=>count($arr),
            'rows'=>$arr
        );
    }
    function gets($lower_row,$upper_row){
        $objs = $this->makefakeobj();
        $arr = array();
        for($c = $lower_row;$c<$lower_row+$upper_row;$c++){
            if($c<$objs['count']){
                array_push($arr,$objs['rows'][$c]);
            }
        }
        return $arr;
    }
    function totalrows(){
        $objs = $this->makefakeobj();
        return $objs['count'];
    }
}