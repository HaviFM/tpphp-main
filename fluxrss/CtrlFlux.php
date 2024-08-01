<?php
class CtrlFlux
{
  private $vue;
  private $model;

  public function __construct()
  {
    $this->vue = new ViewFlux();
    $this->model = new ModelFlux();
  }

  function getFlux($arg)
  {
      if(isset(Conf::$flux[$arg])){
      $rss = $this->model->selectFlux(Conf::$flux[$arg]);
/* 
       if ($flux === 'flux1') {
       $rss = $this->model->selectFlux(Conf::$urlFlux);
      }
      
      else if ($flux === 'flux2') {
        $rss2 = $this->model->selectFlux(Conf::$urlFlux2);
        
        
      }
      else if ($flux === 'flux3'){
        $rss3 = $this->model->selectFlux(Conf::$urlFlux3);
      } */
      $this->vue->afficherFlux($rss);
    }
    else{
      $this->vue->afficherError();
    }
  }
    
  }
