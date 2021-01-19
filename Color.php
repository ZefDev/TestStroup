<?php

class Color
{
  private $color;
  private $word;

  function __construct($color, $word)
  {
    $this->color = $color;
    $this->word = $word;
  }

  function get_color()
  {
      return $this->color;
  }
  function set_color($value)
  {
      $this->color = $value;
  }
  function get_word()
  {
      return $this->word;
  }
  function set_word($value)
  {
      $this->word = $value;
  }
}

?>
