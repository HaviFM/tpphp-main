<?php
class ViewFlux
{
    private $partials = "fluxrss/partials/";

    function __construct(){

    }
    function afficherFlux($rss,$rss2, $rss3){
        $partial = $this->partials . "flux.html";
        
        include Conf::$templates . "template.html";
    }
}