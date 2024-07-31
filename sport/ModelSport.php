<?php

class ModelSport
{

    private $dao;

    function __construct()
    {
      $this->dao = new DAO_Xml();
    }

    function selectSport($url,$sport)
    {
      $array = $this->dao->requete($url.$sport);
      return $array;
      
    }
   
  }