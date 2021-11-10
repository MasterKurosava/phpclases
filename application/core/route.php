<?php
  class Route {
  public static function start() {
    // контроллер и действие по умолчанию
    $controller_name = 'Main';
    $action_name = 'main';
    $routes = substr($_SERVER['REQUEST_URI'], 1);
    // получаем имя контроллера
    if (!empty($routes)) {
      $action_name=$routes;
      $controller_name = $routes;
    }

    // добавляем префиксы
    $action_name = 'action_'.$action_name;
    
    // подцепляем файл с классом контроллера
    $controller_file = strtolower('controller_'.$controller_name).'.php';
    include "controllers/".$controller_file;
    
    // создаем контроллер 
    $controller_name='Controller_'.$controller_name;
    $controller = new $controller_name;
    $action = $action_name;
    if (method_exists($controller, $action)) {
      // вызываем действие контроллера
      $controller -> $action();
    }
  }
} 
?>