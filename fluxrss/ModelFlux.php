<?php
class ModelFlux
{
    private $dao;

    function __construct()
    {
      $this->dao = new DAO_Xml();
    }

    function selectFlux($urlFlux)
    {
      $array = $this->dao->requete($urlFlux);
      return $array;
      
    }
}