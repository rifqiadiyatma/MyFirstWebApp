<?php namespace App\Controllers;

class Helloworld extends BaseController{
    public function index(){
        echo "HALLOOOOOOOO";
    }
    public function tampil($name, $npmm){
        echo $name. '<br>';
        echo $npmm;
    }
    public function global(){
        echo $this->name;
    }
}