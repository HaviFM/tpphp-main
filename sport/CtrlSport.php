<?php 

class CtrlSport {

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
        
        $data = $this->model->selectSport($sport);
        $this->vue->afficherSport($data);
        $this->getWidget($sport);
        
      }
      
}
function getWidget($sport){
$sport = $_GET['sport'];
$widgetData = $this->model->selectWidgetSport($sport);
 
}
}


