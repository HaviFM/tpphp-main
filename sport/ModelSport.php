<?php

class ModelSport
{

    private $dao;

    function __construct()
    {
      $this->dao = new DAO_Xml();
    }

    function selectSport($sport)
    {
      $array = $this->dao->requete(Conf::$urlSport . $sport);
      return $array;
    }
   
  }