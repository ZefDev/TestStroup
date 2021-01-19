<?php
  require_once 'testStroup.php';

  $testStroup = new testStroup();
  $array = $testStroup->make_test();
  for ($i=0; $i<=5 ; $i++) {
    for ($j=0; $j<=5 ; $j++) {
      $temp_color = $array[$i][$j]->get_color();
      $temp_word = $array[$i][$j]->get_word();
      echo "<font color='$temp_color'> $temp_word </font>";
    }
    echo "<br>";
  }
?>
