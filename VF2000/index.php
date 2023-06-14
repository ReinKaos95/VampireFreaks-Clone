<?php 

require_once 'config/config.php';
require_once 'libs/routes.php';
require_once 'config/db.php';

if (isset($_GET['c'])) {
  $control = loadController($_GET['c']);

  if (isset($_GET['a'])) {
    if (isset($_GET['id'])) {
    loadFunction($control, $_GET['a'], $_GET['id']);
    }else{
      loadFunction($control, $_GET['a']);
    }
      
  }else{
      loadFunction($control, mainAction);
  }


}else{
  $control = loadController(mainController);
  $actionTMP=mainAction;
  $control->$actionTMP();

}

 ?>