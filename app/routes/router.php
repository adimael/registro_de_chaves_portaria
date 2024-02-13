<?php

function load(string $controller, string $action)
{

  try{
      // se o controller existe
      $controllerNamespace = "app\\controllers\\{$controller}";
      
      if (!class_exists($controllerNamespace)) {
        throw new \Exception("O controller {$controller} não existe");
      }

      $controllerInstance = new $controllerNamespace;
      // verificar se a action existe no controller
      if (!method_exists($controllerInstance, $action)) {
        throw new \Exception("O método {$action} não existe no controller {$controller}");
      }

      return $controllerInstance->$action((object) $_REQUEST);
  }catch(Exception $e){
    echo "Erro: {$e->getMessage()}";
  
  }
}

$router = [
  "GET" => [
    "/" => fn() => load("HomeController", "index"),
    "/dashboard" => fn() => load("DashboardController", "index"),
    "/logout" => fn() => load("DashboardController", "logout"),
    "/cadastrar" => fn() => load("UsuarioController", "index"),
    "/registrar_chaves" => fn() => load("ChavesController", "index"),
  ],
  "POST" => [
    "/" => fn() => load("HomeController", "login"),
    "/cadastrar" => fn() => load("UsuarioController", "cadastrarUsuario"),
    "/registrar_chaves" => fn() => load("ChavesController", "store"),
    "/dashboard/update" => fn() => load("DashboardController", "updateRegistro"),
    "/dashboard" => fn() => load("DashboardController", "inserirNovoRegistro"),
    "/dashboard/finalizar-registro" => fn() => load("DashboardController", "finalizarRegistro"),
    "/dashboard/delete" => fn() => load("DashboardController", "deleteRegistro"),
  ],
];