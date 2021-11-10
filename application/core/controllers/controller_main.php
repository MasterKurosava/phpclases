<?php
class Controller_main extends Controller { 
function action_main() { 
  $this->view->generate('main_view.php', 'template_view.php'); 
} 
}
?>