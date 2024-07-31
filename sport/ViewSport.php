<?php
class ViewSport
{
    private $partials = "sport/partials/";

    function __construct(){

    }
    function afficherSport($data,$data2){
        $partial = $this->partials . "sport.html";
        include Conf::$templates . "template.html";
    }
}