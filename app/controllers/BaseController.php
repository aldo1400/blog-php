<?php
namespace App\Controllers;
use Twig_Loader_Filesystem;

class BaseController
{
  protected $templateEngine;
  public function __construct(){
    // esto sirve para decirle a twig donde estan las vistas con respecto a index.php que tiene las rutas
    $loader=new Twig_Loader_Filesystem('../views');
    //cargar al atributo protegido un objeto de la clase Twig_Environment , colcaondo el loader y algunos parametros
    $this->templateEngine=new \Twig_Environment($loader,[
      'debug'=>true,
      'cache'=>false
    ]);

    $this->templateEngine->addFilter(new \Twig_SimpleFilter('url',function($path){
      return BASE_URL.$path;
    }));

    $this->templateEngine->addFilter(new \Twig_SimpleFilter('url1',function($path){
      return BASE_URL.'admin/users/edit/'.$path;
    }));

  }

  // Llama a la funcion render a traves del objeto que se encuentra en el atributo templateEngine
  public function render($fileName,$data=[]){
    return $this->templateEngine->render($fileName,$data);
  }

}

 ?>
