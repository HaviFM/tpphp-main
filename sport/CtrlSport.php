<?php

class CtrlSport
{

  private $vue;
  private $model;

  public function __construct()
  {
    $this->vue = new ViewSport();
    $this->model = new ModelSport();
  }

  function getSport()
  {
    if (isset($_GET['sport'])) {
      $sport = $_GET['sport'];
    //  var_dump($sport);
      $data = $this->model->selectSport(Conf::$urlSport, $sport);
      if ($sport === 'volley-ball') { 
        $data2 = $this->model->selectSport(Conf::$urlSport2, 'volley');
      } else {
        $data2 = $this->model->selectSport(Conf::$urlSport2, $sport);
      }
      $this->vue->afficherSport($data, $data2);
    }
  }
  function apiSport()
  {
    $data = $this->model->selectSport(Conf::$urlSport, "");
    $widget = [$data['channel']['item'][0], $data['channel']['item'][1], $data['channel']['item'][2]];

    // var_dump($widget);
    $json = json_encode($widget);
    echo $json;
  }
}
