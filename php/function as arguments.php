<?php

class newClass{

  public function internal($unit){
      echo $unit."<br>";
  }
  public function echo_res($node, $func){
    foreach($node as $unit){
        $this->$func($unit);
    }
  }
  
}

$node = array("one","two2", "three");
$new = new newClass();
$new->echo_res($node, 'internal');


?>