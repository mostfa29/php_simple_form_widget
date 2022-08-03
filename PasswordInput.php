<?php

class PasswordInput extends BaseInput{

  private $name;
  private $value;
  private $label;

  public function __construct(string $name, string $value)
  {
      $this->name = $name;
      $this->value = $value;
      $this->label = $name;
  }


    public function render():string
    {
      return sprintf('
      <div>
        <label>%s</label><br>
        <input type="password" name="%s" value="%s"/>
        </div>
      ', $this->label, $this->name, $this->value);
    }
}

?>