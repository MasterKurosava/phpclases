<?php
class Controller_about extends Controller { 
function action_about() { 
  $this->view->generate('about_view.php', 'template_view.php'); 
} 
}
?>