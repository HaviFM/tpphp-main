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
    function selectWidgetSport($sport)
    {
      $sport ='';
      $arrayWidget = $this->dao->requeteWidget(Conf::$urlSport . $sport);
      var_dump($arrayWidget);
      Session::setSport($arrayWidget);
    }
  }