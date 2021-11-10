<?php
class Controller_keys extends Controller { 
function action_keys() { 
  $this->view->generate('keys_view.php', 'template_view.php'); 
} 
}
?>