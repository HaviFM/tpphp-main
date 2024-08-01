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

  function getFlux()
  {
    if (isset($_GET['flux'])) {
      $flux = $_GET['flux'];
        var_dump($flux);
        if ($_GET == 'flux1') {
      $rss = $this->model->selectFlux(Conf::$urlFlux);
       $this->vue->afficherFlux($rss);
      }
    else if ($_GET == 'flux2') {
    $rss = $this->model->selectFlux(Conf::$urlFlux2);
    $this->vue->afficherFlux($rss);

        }
        else if ($_GET == 'flux3'){
          $rss = $this->model->selectFlux(Conf::$urlFlux3);
          $this->vue->afficherFlux($rss);
        }
    }
  }
}