<?php

namespace App\Controllers;

use app\Controllers\Controller;

class ChavesController 
{
  public function index()
  {
    Controller::view("registrar_chaves");
  }

  public function store($params)
  {
    var_dump($params->name);
    var_dump($params->email);
    //echo "Hello World! (ContactController) - POST";
  }
}