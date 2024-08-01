<?php
class ViewFlux
{
    private $partials = "fluxrss/partials/";

    function __construct(){

    }
    function afficherFlux($rss){
        $partial = $this->partials . "flux.html";
        
        include Conf::$templates . "template.html";
    }
    function afficherError(){
        $partial = $this->partials . "error.html";
        include Conf::$templates . "template.html";
    }
}