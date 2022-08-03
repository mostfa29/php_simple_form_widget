<?php
include ('HtmlElement.php');

abstract class BaseInput extends HtmlElements{
   
    private $name;
    private $label;
    private $value;

    public function __construct(string $name, string $label, string $value)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }
}

?>