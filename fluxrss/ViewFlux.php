<?php
class ViewFlux
{
    private $partials = "flux/partials/";

    function __construct(){

    }
    function afficherFlux($rss){
        $partial = $this->partials . "flux.html";
        include Conf::$templates . "template.html";
    }
}