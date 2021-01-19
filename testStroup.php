<?php
require_once 'Color.php';
class testStroup
{
  private $array;
  function __construct($array="")
  {
    $this->array = array('red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato');
  }
  function get_array()
  {
      return $this->array;
  }

  function set_array($value)
  {
      $this->array = $value;
  }

  function make_test()
  {
    $temp_array= array();
    for ($i=0; $i<=5 ; $i++) {
      shuffle($this->array);
      for ($j=0; $j<=5 ; $j++) {
        $temp_word = $this->array[$j];
        $temp_color =$this->array[rand(0, 9)];
        while ($temp_word == $temp_color) {
          $temp_color = $this->array[rand(0, 9)];
        }
        $temp_array[$i][$j] = new Color($temp_color,$temp_word);
      }
    }
    return $temp_array;
  }
}
?>
