<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 class Form extends HtmlElements{

    protected array $elems= [];
    public $action;
    public $method;

    public function __construct(string $action= "" , string $method = 'get' )
    {
        $this->action = $action;
        $this->method = $method;
    }

     
    function addElement(HtmlElements $elems){
      $this->elems[] = $elems;
    }

    public function render():string
    {
        $content = implode(PHP_EOL, array_map(fn($elems) => $elems->render(), $this->elems));
        return sprintf("<form action='%s' method='%s'>%s</form> ", $this->action, $this->method, $content);
    }
 }

?>