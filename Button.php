<?php

class Button extends BaseInput{

    private $text;
    private $label;
    private $value;
  
    public function __construct(string $text)
    {
        $this->text = $text;

    }
  
    
    
    public function render():string
    {
      return sprintf('
      <div>
        <button>%s</button>
      </div>
      ',  $this->text);
    }
}
?>